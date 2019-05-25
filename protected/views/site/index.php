<div data-ng-controller="MapCtrl">
    <div id="map"></div>
    <!--<div id="class" data-ng-repeat="marker in markers | orderBy : title">-->
    <!--<a href="#" data-ng-click="openInfoWindow($event, marker)">{{marker.title}}</a>-->
    <!--</div>-->
    <div id="buttons" style="display:inline; position: absolute;  left: 30%; z-index: 20;">
        <button class="btn btn-small btn-primary" data-toggle="modal" data-target="#myModal" id="newPlace">Yangi joy qo'shish</button>
        <button class="btn btn-small btn-success" id="gotoUrgench">Urganch</button>
        <select ng-options="cat as cat.name for cat in categories" style="margin-top:10px;width: 120px"
                ng-model="category" ng-change="updateMarkers()"></select>
        <input type="text" name="search" id="search" ng-change="searchMarkers()" ng-model="search" style="margin-top:10px;" placeholder="Izlash...">
        <input type="button" class="btn btn-small btn-primary" value="Go" style="margin-top:2px;">
    </div>
    <div class="modal fade in" role="dialog" id="myModal" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form" action="save.php" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="gridSystemModalLabel">Yangi joyni belgilash</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label for="longitude">Longitude</label>
                                <input name="longitude" type="text" id="longitude" data-ng-model="longitude" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input name="latitude" type="text" id="latitude" data-ng-model="latitude" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category">Kategoriya</label>
                                <select id="category" name="category">
                                    <option data-ng-repeat="cat in categories" value="{{cat.id}}">{{cat.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Nomlanishi</label>
                                <input name="name" type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Qisqacha izoh</label>
                                <textarea name="description" type="text" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" data-ng-click="deleteOverlays()">Yopish</button>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>