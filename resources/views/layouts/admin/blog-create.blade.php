<!DOCTYPE html>
<html lang="en" ng-app="adminBlogApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/angular@1.8.2/angular.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body ng-controller="BlogController">

  @extends('layouts.admin.adminDashboard')

@section('AdminContent')

<div class="max-w-6xl mx-auto p-6"  >

    <h1 class="text-2xl font-bold mb-6">📝 Manage Blogs</h1>

    <!-- CREATE BLOG FORM (Laravel POST – KEEP AS IS) -->
    <div class="bg-white p-6 rounded-lg shadow mb-10">
        <h2 class="text-lg font-semibold mb-4">Add New Blog</h2>

        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="text" name="title" class="w-full border rounded px-4 py-2"
                placeholder="Blog Title" required>

            <input type="file" name="image" class="w-full border rounded px-4 py-2" required>

            <textarea name="content" rows="5" class="w-full border rounded px-4 py-2"
                placeholder="Blog Content" required></textarea>

            <select name="status" class="w-full border rounded px-4 py-2">
                <option value="published">Publish</option>
                <option value="draft">Draft</option>
            </select>

            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Post Blog
            </button>
        </form>
    </div>

    <!-- BLOG LIST (ANGULARJS) -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Posted Blogs</h2>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border">Image</th>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Created</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr ng-repeat="blog in blogs">
                    <td class="p-3 border">
                        <img ng-src="@{{ blog.image }}"
                            class="w-20 h-14 object-cover rounded">
                    </td>

                    <td class="p-3 border">@{{ blog.title }}</td>

                    <td class="p-3 border">
                        <span ng-if="blog.status=='published'" class="text-green-600">Published</span>
                        <span ng-if="blog.status=='draft'" class="text-yellow-600">Draft</span>
                    </td>

                    <td class="p-3 border">@{{ blog.created_at | date:'dd MMM yyyy' }}</td>

                    <td class="p-3 border">
                        <button ng-click="deleteBlog(blog.id)"
                            class="bg-red-500 text-white px-3 py-1 rounded text-sm">
                            Delete
                        </button>
                    </td>
                </tr>

                <tr ng-if="blogs.length === 0">
                    <td colspan="5" class="text-center p-6 text-gray-500">
                        No blogs posted yet
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection







    <!-- ✅ Your AngularJS Controller Script -->
    <script src="{{ mix('js/adminjsController.js') }}"></script>

</body>

</html>
