<div data-ng-controller="MapCtrl" id="map-wrapper">
    <div ng-init="initialize()" id="map"></div>
    <div id="buttons" class="form-horizontal" >
        <h4 class="text-center text-success">Amallar</h4>
        <div class="input-group input-group-sm">
            <input type="text" class="form-control" name="search" id="search" ng-change="searchMarkers()" ng-model="search" style="margin-top:10px;" placeholder="Izlash...">
        </div>
        <div class="input-group input-group-sm">
            <select id="cats" class="form-control" ng-options="cat as cat.name for cat in categories"
                    ng-model="category" ng-change="updateMarkers()"></select>
        </div>
        <button id="urgench" class="btn btn-sm btn-success" data-ng-click="gotoUrgench()" id="gotoUrgench">Urganch markazi</button>
    </div>
    <button id="showBar" class="btn btn-sm" data-ng-click="showBar()"> <i class="glyphicon glyphicon-align-justify"></i> </button>
    <button id="hideBar" class="btn btn-sm" data-ng-click="hideBar()"> <i class="glyphicon glyphicon-share-alt"></i> </button>
    <div id="infoContent">
        <button type="button" class="close" data-ng-click="hideInfo()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="text-center" id="place_name"></h1>
        <div class="description" id="place_description"></div>
    </div>
</div>