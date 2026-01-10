<!DOCTYPE html>
<html lang="en" ng-app="adminPortal">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal | Login</title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link href="{{ asset('css/adminLogin.css') }}" rel="stylesheet" />
</head>

<body ng-controller="LoginController" class="min-h-screen flex items-center justify-center p-4 bg-gray-900">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>

    <div id="notification" class="notification fixed top-0 left-0 right-0 p-4 text-white text-center font-medium" ng-class="{'show': showNotification, 'bg-red-500': notificationType === 'error', 'bg-green-500': notificationType === 'success'}">
        <p>@{{ notificationMessage }}</p>
    </div>

    <div class="login-container w-full max-w-md p-8 rounded-2xl shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-block p-3 rounded-full bg-white/10 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-white">Admin Portal</h1>
            <p class="text-white/70 mt-2">Enter your credentials to access the dashboard</p>
        </div>

        <form id="login-form" class="space-y-6" ng-submit="login()">
            <div>
                <label for="username" class="block text-sm font-medium text-white/90 mb-2">Username</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <input id="username" ng-model="username" name="username" type="text" required class="form-input block w-full pl-10 pr-3 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="Enter your username">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <label for="password" class="block text-sm font-medium text-white/90">Password</label>
                    <a href="#" class="text-sm text-white/70 hover:text-white transition-colors">Forgot password?</a>
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="password" ng-model="password" name="password" type="@{{ showPassword ? 'text' : 'password' }}" required class="form-input block w-full pl-10 pr-10 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="Enter your password">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" ng-click="togglePassword()" class="text-white/70 hover:text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" ng-show="!showPassword" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" ng-show="showPassword" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center">
                <input id="remember-me" ng-model="rememberMe" name="remember-me" type="checkbox" class="h-4 w-4 bg-blue-600 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-white/70">Remember me</label>

            </div>

            <div>
                <button type="submit" class="btn-login w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" ng-disabled="isLoading">
                    <span class="flex items-center">
                        <span ng-if="!isLoading">Sign in</span>
                        <span ng-if="isLoading">Signing in...</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" ng-if="!isLoading" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin ml-2 h-5 w-5" ng-if="isLoading" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="12" cy="12" r="10" stroke-width="4" stroke="currentColor" stroke-dasharray="32" stroke-dashoffset="8" fill="none" />
                        </svg>
                    </span>
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-white/70">
                Don't have an account? <a href="#" class="font-medium text-blue-300 hover:text-blue-200 transition-colors">Contact administrator</a>
            </p>
        </div>
    </div>
    <script src="{{ asset('js/adminLogin.js') }}"></script>

    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML = "window.__CF$cv$params={r:'939d5eeee495b2a9',t:'MTc0NjI1MDI3My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
