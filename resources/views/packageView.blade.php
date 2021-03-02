@extends('layouts.mastercopy')

@section('content')
<header class="alternate" style="background:black">
    <div class="header-main"  style="background:black">


        <div class="container">
            <!---->
            <div class="template-container" ng-include="headerCtrl.template">

                <div class="header-content">
                    @if(count($packages) > 0)

                    @foreach($packages->all() as $package)
                    <div class="logo-container"><a ui-sref="tracker" href="/"><span>Order Tracker</span></a></div>
                    <div class="tagline hide-on-med-and-down"><strong>
                            <font size="2" face="Verdana" color="#FFFFFF">Welcome</font>
                        </strong>
                        <font face="Verdana">&nbsp; </font> {{$package->sender_name}} <font face="Verdana"> | </font> <a href="/">
                            <font color="#FF0000" size="2" face="Verdana"> <span
                                    style="text-decoration: none">Logout</span></font>
                        </a>
                    </div>
                    @endforeach
                    @else
                    <h6>Package Does Not Exit</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>


<div class="main-content">
    <div class="main-container" id="mainContainer">
        <!--div id="top"></div-->
        <!---->
        <div class="content" ui-view="">
        <button class="btn btn-primary"><a href="/">Back</a></button>
            @if(count($packages) > 0)

            @foreach($packages->all() as $package)
            <sub-header>
                <div class="container">
                    <h1 class="sub-header">Order</h1>
                </div>
            </sub-header>
            <div class="container" ng-transclude="">
                <!---->
                <section class="order-details">
                    <div class="order-details-summary alternatestyle"
                        ng-class="{alternatestyle : orderCtrl.alternetStyle === " tracker" }">

                        <div class="card order-customer-details">
                            <div class="card-content">
                                <!---->
                                <!---->
                                <div class="card-title alt" ng-if="orderCtrl.alternetStyle === " tracker"">Tracking:
                                    {{$package->tracking_id }}</div>

                                    <div>
                                    <button class="{{ $package->status ? 'btn btn-success' : 'btn btn-warning' }}">
                                    {{ $package->status ? 'Delivered' : 'Pending' }}</button>
                                    </div>
                                <!---->
                                <div class="details-container">
                                    <!---->
                                    <div class="details" ng-if="orderCtrl.alternetStyle === " tracker"">
                                        <p class="profile-name" flex="" ng-bind-template="Mitchell Chris Bradley ">
                                            Senders Details:</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item" ><h5 style="color:#687284;">Name:</h5></li>
                                            <li class="list-inline-item">{{ $package->sender_name }}</li>
                                        </ul>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><h5 style="color:#687284;">Location:</h5></li>
                                            <li class="list-inline-item">{{ $package->sender_location }}</li>
                                        </ul>
                                    </div>
                                    <!---->

                                    <div class="details">
                                        <p class="profile-name" flex="" ng-bind-template="Roselyn P.  Ubo">
                                            Receivers Details:</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><h5 style="color:#687284;">Name:</h5></li>
                                            <li class="list-inline-item">{{ $package->receiver_name }}</li>
                                        </ul>
                                        <!---->
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><h5 style="color:#687284;">Address:</h5></li>
                                            <li class="list-inline-item">{{ $package->receiver_address }}</li>
                                        </ul>
                                        <!---->
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><h5 style="color:#687284;">Tel:</h5></li>
                                            <li class="list-inline-item">{{ $package->receiver_phonenumber }}</li>
                                        </ul>
                                        <!---->
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><h5 style="color:#687284;">Email:</h5></li>
                                            <li class="list-inline-item">{{ $package->receiver_email }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="order-packages">
                        <!---->
                        <div ace-package="pack" ng-repeat="pack in orderCtrl.order.packages | orderBy:" id""
                            is-current="orderCtrl.packNo === pack.packageNumber || orderCtrl.expandAll"
                            allow-edit="orderCtrl.crudOps">
                            <form ng-submit="packCtrl.update(pack, packageForm)" name="packageForm" novalidate=""
                                class="ng-pristine ng-valid">
                                <div class="card-with-action">
                                    <div class="card order-package" ace-collapsible="">
                                        <div class="card-content">
                                            <div class="card-title" ace-collapsible-origin="">
                                                <div class="collapsible-origin collapsible-expanded" ng-class="{"
                                                    collapsible-expanded": collapseCtrl.expanded}">
                                                    <ng-md-icon icon="expand_more" class="collapsible-origin-icon">
                                                        <svg xcomns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            width="24" height="24">
                                                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z">
                                                            </path>
                                                        </svg></ng-md-icon>
                                                   <!-- <div ng-transclude=""><span class="package-title">Package:
                                                            {{$package->tracking_id}}</span>
                                                        
                                                        <iframe></iframe></div>-->
                                                </div>
                                            </div>
                                            <div ace-collapsible-target="" ng-class="{expanded: packCtrl.opened}"
                                                class="expanded">
                                                <div class="collapsible-target collapsible-expanded" ng-class="{"
                                                    collapsible-expanded": collapseCtrl.expanded}" ng-style="{" height":
                                                    collapseCtrl.currentHeight}" style="height: auto;">
                                                    <div class="collapsible-target-content" ng-transclude="">
                                                        <div class="package-content">
                                                            <div class="package-summary-container">
                                                                
                                                                <!-- <small>{{$package->location_1}}</small> -->
                                                                <div class="package-additional-info">
                                                                    <div class="value">
                                                                        <dl>
                                                                            <dd>Destination:</dd>
                                                                            <dt> {{$package->destination}}</dt>
                                                                        </dl>
                                                                    </div>
                                                                    <!---->
                                                                    <div class="estimated-delivery value"
                                                                        ng-if="pack.minEstDeliveryDate &amp;&amp; pack.maxEstDeliveryDate">

                                                                        <dl>
                                                                            <dd>Date Sent:</dd>
                                                                            <dt>{{date('M j, Y h:i', strtotime($package->created_at))}}
                                                                                <!---->
                                                                            </dt>
                                                                        </dl>
                                                                    </div>
                                                                    <!---->
                                                                    <div class="estimated-delivery value"
                                                                        ng-if="pack.minEstDeliveryDate &amp;&amp; pack.maxEstDeliveryDate">
                                                                        <dl>
                                                                            <dd>Estimated Delivery Date:</dd>
                                                                            <dt>{{date('M j, Y h:i', strtotime($package->delivery_date))}}
                                                                                <!---->
                                                                            </dt>
                                                                        </dl>
                                                                    </div>
                                                                    <!---->
                                                                </div>
                                                            </div>
                                                                <!---->
                                                            </div>

                                                            <div>
                                                                <h4 class="text-danger" style="margin-top:20px; margin-bottom:0px;">Package
                                                                Description</h4>
                                                                <table class="table">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th scope="col">Item Description</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{$package->description}}</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                                <table class="table">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th scope="col">weight</th>
                                                                            <th scope="col">Cost</th>
                                                                            <th scope="col">Date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>{{$package->weight}}</td>
                                                                            <td>{{$package->cost}}</td>
                                                                            <td>{{date('M j, Y h:i', strtotime($package->created_at))}}
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>

                                                               
                                                            </div>

                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!---->
                    </div>
                    <!---->
                </section>
                <!---->
            </div>
            @endforeach
            @else
            <h2>NO PACKAGE AVAILABLE</h2>

            @endif
        </div>

        <footer>
            <div class="container" ng-include="footerCtrl.template">
                <div class="row">
                    <div class="col s4 l6 center-on-small-only">
                        <div class="footer-logo"><span>Johdex</span>Logistics</div>
                    </div>
                </div>
                <div class="row no-space">
                    <div class="col s12">
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col enquires center-on-small-only"><small>For enquires: </small><a class="light"
                            href="mailto:info@Fawad Express.com"><small>info@johdex.com</small></a>
                    </div>
                    <div class="col copyright center-on-small-only"><small>Copyright © Johdex Logistics
                    2019. All rights reserved.</small></div>
                </div>
            </div>
        </footer>
        
    </div>



    @endsection