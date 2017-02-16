@extends('master')
@section('title', 'Admin Control Panel')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">account_box</i></div>
                            <h4 class="list-group-item-heading">Manage User</h4>
                            <a href="/admin/users" class="btn btn-default btn-raised">All Users</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">accessibility</i></div>
                            <h4 class="list-group-item-heading">Manage Roles</h4>
                            <a href="/admin/roles" class="btn btn-default btn-raised">All Roles</a>
                            <a href="/admin/roles/create" class="btn btn-primary btn-raised">Create A Role</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">border_color</i></div>
                            <h4 class="list-group-item-heading">Manage Posts</h4>
                            <a href="/admin/posts" class="btn btn-default btn-raised">All Posts</a>
                            <a href="/admin/posts/create" class="btn btn-primary btn-raised">Create A Post</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">format_list_bulleted</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">format_list_bulleted</i></div>
                            <h4 class="list-group-item-heading">Manage Categories</h4>
                            <a href="/admin/categories" class="btn btn-default btn-raised">All Categories</a>
                            <a href="/admin/categories/create" class="btn btn-primary btn-raised">New Category</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>

            </div>

        </div>
    </div>

@endsection