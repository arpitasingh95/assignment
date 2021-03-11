@extends('layouts.app')

@section('content')
<style>
    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
</style>

<div class="d-flex" id="wrapper">


    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action">Calender</a>
            <a href="#" class="list-group-item list-group-item-action">Data Import</a>
            <a href="#" class="list-group-item list-group-item-action">Files</a>
            <a href="#" class="list-group-item list-group-item-action">Administrator</a>
            <a href="#" class="list-group-item list-group-item-action">Company</a>
            <a href="#" class="list-group-item list-group-item-action">Users</a>
            <a href="#" class="list-group-item list-group-item-action active">Profile</a>
            <a href="#" class="list-group-item list-group-item-action ">Activity log</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container py-4">

            <div class="col-md-12">
                <h4>Edit Person</h4>
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-pills bg-grey mb-3 text-center pd-5" id="pills-tab" role="tablist">
                            <li class="nav-item col-md-6 col-sm-6 col-xs-6 ">
                                <a class="nav-link bg-white text-black active" id="pills-personal-tab" data-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true">Personal</a>
                            </li>
                            <li class="nav-item  col-md-6 col-sm-6 col-xs-6">
                                <a class="nav-link disabled" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab" aria-controls="pills-company" aria-selected="false">Companies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="title">Title</label>
                                            <select id="title" class="form-control" name="title">

                                                <option>Mr. </option>
                                                <option>Mrs. </option>
                                                <option>Ms. </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value=" {{ Auth::user()->name }}">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="applellative">Applellative</label>
                                            <input type="text" class="form-control" name="applelative" id="applellative" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="  {{ Auth::user()->email }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="birthday">Birthday</label>
                                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Enter birthday">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="unique">Unique Indentifier</label>
                                            <input type="text" class="form-control" name="unique" id="unique">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Bank">Bank</label>
                                            <input type="text" name="bank" class="form-control" id="Bank">
                                        </div>
                                        <div class="form-group col-md-4 ">
                                            <label for="bankaccount">Bank Account</label>
                                            <input type="text" name="bankaccount" class="form-control" id="bankaccount">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <textarea name="note" id="note" class="form-control height-100" placeholder="Enter Note"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <button type="button" class="btn btn-primary">
                                                Back <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                Delete <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                                Create <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="form-group col-md-6 text-right">
                                            <button type="button" class="btn btn-warning">
                                                Changes <i class="fa fa-repeat" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                Update <i class="fa fa-check" aria-hidden="true"></i>
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">Diasas</div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>


@endsection