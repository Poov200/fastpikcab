<!DOCTYPE html>
<html lang="en" ng-app="adminContactApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Messages</title>
 
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/angular@1.8.2/angular.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
    }
    .message-card {
      transition: all 0.2s ease;
    }
    .message-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    .shimmer {
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: shimmer 1.5s infinite;
    }
    @keyframes shimmer {
      0% { background-position: -200% 0; }
      100% { background-position: 200% 0; }
    }
    .pagination-btn {
      transition: all 0.2s ease;
    }
    .pagination-btn:hover:not(.active) {
      background-color: #e5e7eb;
    }
    .badge {
      position: absolute;
      top: -8px;
      right: -8px;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-controller="adminContactControllers">

@extends('layouts.admin.adminDashboard')
@section('AdminContent')
<div class="container mx-auto p-6" ng-controller="adminContactControllers">
    <div class="flex justify-between items-center mb-6">
      <div>
        <h1 class="text-3xl font-bold text-gray-800">Contact Messages</h1>
        <p class="text-gray-600">Manage and respond to user inquiries</p>
      </div>
      <div class="flex space-x-3">
        <div class="relative">
          <input type="text" ng-model="searchText" placeholder="Search messages..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
        </div>
        <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="all">All Messages</option>
          <option value="unread">Unread</option>
          <option value="read">Read</option>
        </select>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
          <i class="fas fa-download mr-2"></i> Export
        </button>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
      <div class="flex items-center justify-between mb-4">
        <div class="flex space-x-6">
          <div class="text-center">
            <div class="text-2xl font-bold text-blue-600">@{{ contactMessages.length }}</div>
            <div class="text-gray-600 text-sm">Total Messages</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-green-600">@{{ getUnreadCount() }}</div>
            <div class="text-gray-600 text-sm">Unread</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-bold text-purple-600">@{{ getThisWeekCount() }}</div>
            <div class="text-gray-600 text-sm">This Week</div>
          </div>
        </div>
        <div class="flex items-center">
          <span class="text-gray-600 mr-2">View:</span>
          <button ng-click="viewMode = 'table'" ng-class="{'bg-blue-100 text-blue-600': viewMode === 'table'}" class="px-3 py-1 rounded-l-lg border border-gray-300">
            <i class="fas fa-table"></i>
          </button>
          <button ng-click="viewMode = 'card'" ng-class="{'bg-blue-100 text-blue-600': viewMode === 'card'}" class="px-3 py-1 rounded-r-lg border border-gray-300 border-l-0">
            <i class="fas fa-th-large"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Empty State -->
    <div ng-if="contactMessages.length === 0" class="bg-white rounded-xl shadow-md p-10 text-center">
      <div class="flex flex-col items-center justify-center">
        <div class="bg-blue-100 p-4 rounded-full mb-4">
          <i class="fas fa-inbox text-blue-600 text-4xl"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mb-2">No Contact Messages</h3>
        <p class="text-gray-600 max-w-md mx-auto mb-6">There are currently no messages in your inbox. New messages will appear here when users contact you.</p>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
          Refresh
        </button>
      </div>
    </div>

    <!-- Table View -->
    <div ng-if="contactMessages.length > 0 && viewMode === 'table'" class="bg-white rounded-xl shadow-md overflow-hidden">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <div class="flex items-center">
                ID <i class="fas fa-sort ml-1"></i>
              </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <div class="flex items-center">
                Name <i class="fas fa-sort ml-1"></i>
              </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <div class="flex items-center">
                Email <i class="fas fa-sort ml-1"></i>
              </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Message
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              <div class="flex items-center">
                Date <i class="fas fa-sort ml-1"></i>
              </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              Actions
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr ng-repeat="message in contactMessages | filter:searchText" class="hover:bg-gray-50">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
              #@{{ message.id }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              @{{ message.name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="mailto:@{{ message.email }}" class="text-blue-600 hover:underline">@{{ message.email }}</a>
            </td>
            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">
              @{{ message.message }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              @{{ formatDate(message.created_at) }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
              <div class="flex space-x-2">
                <button class="text-blue-600 hover:text-blue-900" title="View Details">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="text-green-600 hover:text-green-900" title="Reply">
                  <i class="fas fa-reply"></i>
                </button>
                <button class="text-red-600 hover:text-red-900" title="Delete">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
        <div class="flex items-center justify-between">
          <div class="text-sm text-gray-700">
            Showing <span class="font-medium">1</span> to <span class="font-medium">@{{ contactMessages.length > 10 ? 10 : contactMessages.length }}</span> of <span class="font-medium">@{{ contactMessages.length }}</span> results
          </div>
          <div class="flex space-x-1">
            <button class="pagination-btn px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
              Previous
            </button>
            <button class="pagination-btn px-3 py-1 border border-gray-300 rounded-md text-sm font-medium bg-blue-600 text-white active">
              1
            </button>
            <button class="pagination-btn px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
              2
            </button>
            <button class="pagination-btn px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
              3
            </button>
            <button class="pagination-btn px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700">
              Next
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Card View -->
    <div ng-if="contactMessages.length > 0 && viewMode === 'card'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div ng-repeat="message in contactMessages | filter:searchText" class="message-card bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-6">
          <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
              <div class="bg-blue-100 rounded-full p-3 mr-3">
                <i class="fas fa-user text-blue-600"></i>
              </div>
              <div>
                <h3 class="font-semibold text-lg text-gray-800">@{{ message.name }}</h3>
                <a href="mailto:@{{ message.email }}" class="text-blue-600 hover:underline text-sm">@{{ message.email }}</a>
              </div>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">New</span>
          </div>
          <div class="mb-4">
            <p class="text-gray-600 text-sm">@{{ message.message }}</p>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-gray-500 text-xs">@{{ formatDate(message.created_at) }}</span>
            <div class="flex space-x-2">
              <button class="text-blue-600 hover:text-blue-900 p-1" title="View Details">
                <i class="fas fa-eye"></i>
              </button>
              <button class="text-green-600 hover:text-green-900 p-1" title="Reply">
                <i class="fas fa-reply"></i>
              </button>
              <button class="text-red-600 hover:text-red-900 p-1" title="Delete">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection




  <!-- ✅ Your AngularJS Controller Script -->
  <script src="{{ mix('js/adminContactdetails.js') }}"></script>

</body>
</html>
