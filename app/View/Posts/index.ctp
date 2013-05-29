<?php
$this->Html->script('angular.min', array('inline' => false));
$this->Html->script('controller/controller', array('inline' => false));

echo "This is a domo for Angular js Application" ;; 
?>

<div  ng-controller="abc" >
	
<form action="" method>
	<input name="username" ng-model="username" placeholder="you username " autocomplete="off"  class="input-medium search-query" />
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
     
</div>

<?php
 var_dump($post);
?>