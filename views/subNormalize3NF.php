<div id="subNormalize3NF" class="mainContentRightColumn" ng-controller="subNormalize3NFCtrl" style="display:none;">
    <h2 style="border-bottom: dotted 1px;">Normalize to 3NF</h2>
    
    <div class="normalizedTablesDiv" ng-repeat="normalizedTable in normalizedTables">
        <h4>Attributes</h4>
        <br/>
        <span ng-repeat="attribute in normalizedTable.theTable" class="normalizedTableAttributeSpan">
            {{attribute}}
        </span>
        
        <br/>
        <br/>
        <h4>Functional Dependencies</h4>
        <br/>
         <div ng-repeat="functionalDependency in normalizedTable.theFDs" class="normalizedTableAttributeSpan">
             
             <span ng-repeat="attribute in functionalDependency.ls">
                 {{attribute}} &nbsp;&nbsp;
             </span>
             &nbsp;
             <img src="images/icon_arrow_right.png" width="16" height="16">
             &nbsp;
             <span ng-repeat="attribute in functionalDependency.rs">
                 {{attribute}} &nbsp;&nbsp;
             </span>
        </div>
    </div>

    <div>
        <h2 style="border-bottom: dotted 1px; padding-bottom: 5px;" >
            Show Steps 
            <label class="switch">
                <input type="checkbox" id="normalize3NFSwitchButton">
                <div class="slider round"></div>
            </label>
        </h2>
        <div class="normalizedTablesDiv" id="normalize3NFStepsDiv" style="display: none;">
             <span ng-repeat="step in steps">
                 <div class="normalizedTableAttributeSpan"> 
                    <div ng-bind-html="step | unsafe"></div>
                 </div>
             </span>
        </div>
    </div>
    
</div>