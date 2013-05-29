<?php
$this->Html->script('angular.min', array('inline' => false));
$this->Html->script('controller/controller', array('inline' => false));


echo "this is out forst comntroler" ;; 
?>

<div  ng-controller="abc" >
	



<form action="" method>
	<input name="username" ng-model="username" placeholder="you username " autocomplete="off" />
</form>

<span>You username maybe {{username}} </span>

<br/>
<br/>


<ul>
	<li ng-repeat="phone in phones | filter:username | orderBy:orderProp" >
	{{phone.name}}
	<p>{{phone.snippet}}</p>
	</li>
</ul>


    Sort by:
    <select ng-model="orderProp">
    <option value="name">Alphabetical</option>
    <option value="age">Newest</option>
    </select>
     
     
    <!-- <ul class="phones">
    <li ng-repeat="phone in phones | filter:query | orderBy:orderProp">
    {{phone.name}}
    <p>{{phone.snippet}}</p>
    </li>
    </ul> -->






</div>