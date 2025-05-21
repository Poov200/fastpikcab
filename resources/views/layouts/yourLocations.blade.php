<div ng-app="cabApp" ng-controller="CabController">
    <div class="panel-group" id="cabAccordion">
      <div class="panel panel-default" ng-repeat="city in cities">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a href="" ng-click="toggle(city)">
              🚕 CAB SERVICE FROM @{{ city.name.toUpperCase() }}
            </a>
          </h4>
        </div>
        <div class="panel-collapse collapse" ng-class="{in: city.open}">
          <div class="panel-body">
            <ul class="list-unstyled">
              <li ng-repeat="route in city.routes">🚖 @{{ route }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/yourLocation.js') }}"></script>
