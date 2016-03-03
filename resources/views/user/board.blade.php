@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="user-board-title pull-left">Welcome Board <span class="glyphicon glyphicon-star" aria-hidden="true"></span></h2>   
            <h2 class="user-board-privacy-type pull-right">
                <a  class="dropdown-toggle user-board-privacy-type" data-toggle="dropdown" role="button" aria-expanded="false" href="{{ url('/register') }}"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Private</a>
                <ul class="dropdown-menu profile-dropdown" role="menu">
                    <li class="text-center">Change Visibility</li>
                    <li class="divider"></li>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Private <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></h5>   
                            <p>The Board is private. Only people added to the board can view and edit it.</p>
                        </li>
                        <li class="list-group-item">
                            <h5><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Private</h5>   
                            <p>The Board is private. Only people added to the board can view and edit it.</p>
                        </li>
                        <li class="list-group-item">
                            <h5><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Private</h5>   
                            <p>The Board is private. Only people added to the board can view and edit it.</p>
                        </li>
                    </ul>
                </ul>
            </h2>
        </div>
    </div>
</div>
<div class="horizontal-container">
    <div class="row horizontal-row">
        <div class="bcategory-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title board-panel-title">Stuff to try (this is a list)</h3>
                </div>
                <div class="panel-body">
                    <a href="#">Add a card...</a>
                </div>
            </div>
        </div>
        <div class="bcategory-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title board-panel-title">Tried it (another list)</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                    </ul>
                    <a href="#">Add a card...</a>
                </div>
            </div>
        </div>
        <div class="bcategory-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title board-panel-title">Tried it (another list)</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                    </ul>
                    <a href="#">Add a card...</a>
                </div>
            </div>
        </div>
        <div class="bcategory-list">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title board-panel-title">Tried it (another list)</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                        <li class="list-group-item board-list-items"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero unde labore voluptates numquam</a></li>
                    </ul>
                    <a href="#">Add a card...</a>
                </div>
            </div>
        </div>
        <div class="bcategory-list">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#">Add a list...</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection