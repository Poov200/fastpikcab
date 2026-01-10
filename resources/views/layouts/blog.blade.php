<!DOCTYPE html>
<html lang="en" ng-app="userBlogApp">
<head>
    <meta charset="UTF-8">
    <title>Blog News</title>

    <script src="https://cdn.jsdelivr.net/npm/angular@1.8.2/angular.min.js"></script>
   
</head>

<body ng-controller="UserBlogController">

<div class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-bold mb-8">Latest News & Blogs</h1>

    <!-- BLOG LIST -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <div ng-repeat="blog in blogs | filter:{status:'published'}"
             class="bg-white rounded-lg shadow hover:shadow-lg transition overflow-hidden">

            <img ng-src="/storage/@{{ blog.image }}"
                 class="w-full h-48 object-cover">

            <div class="p-5">
                <h2 class="text-lg font-semibold mb-2">
                    @{{ blog.title }}
                </h2>

                <p class="text-gray-600 text-sm">
                    @{{ blog.content | limitTo:120 }}...
                </p>

                <p class="text-xs text-gray-400 mt-3">
                    @{{ blog.created_at | date:'dd MMM yyyy' }}
                </p>
            </div>
        </div>

    </div>

    <!-- EMPTY STATE -->
    <div ng-if="blogs.length === 0"
         class="text-center text-gray-500 mt-10">
        No blogs available
    </div>

</div>

<script>
var app = angular.module('userBlogApp', []);

app.controller('UserBlogController', function ($scope, $http) {

    $scope.blogs = [];

    $scope.loadBlogs = function () {
        $http.get('/api/admin/blogs')
            .then(function (res) {
                if (res.data.status) {
                    $scope.blogs = res.data.data;
                }
            }, function () {
                console.error('Failed to load blogs');
            });
    };

    $scope.loadBlogs();
});
</script>

</body>
</html>
