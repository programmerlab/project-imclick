@extends('packages::layouts.master')
@section('content') 
@include('packages::partials.main-header')
<!-- Left side column. contains the logo and sidebar -->
@include('packages::partials.main-sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
    @include('packages::partials.breadcrumb')

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="panel panel-cascade">
                        <div class="panel-body ">
                            <div class="row">
                                <div class="box">
                                    <div class="box-header">
                                        <form action="{{route('user')}}" method="get">
                                            <div class="col-md-3">
                                                <select name="GroupID" id="GroupID" class="form-control">
                                                    <option value="">---Select Group---</option>
                                                    
                                                    @foreach($grps as $key => $grp)
                                                    <option value="{{ $grp->GroupID }}" {{ (isset($_REQUEST['GroupID']) && $_REQUEST['GroupID']==$grp->GroupID)?"selected='selected'":''}} >{{ $grp->Title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input value="{{ (isset($_REQUEST['search']))?$_REQUEST['search']:''}}" placeholder="search by Name/Email" type="text" name="search" id="search" class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" value="Search" class="btn btn-primary form-control">
                                            </div>
                                        </form>
                                        <div class="col-md-2 pull-right">
                                            <div style="width: 150px;" class="input-group"> 
                                                <a href="{{ route('user.create')}}">
                                                    <button class="btn  btn-primary"><i class="fa fa-user-plus"></i> Add User</button> 
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.box-header -->

                                    
                                    @if(Session::has('flash_alert_notice'))
                                         <div class="alert alert-danger alert-dismissable">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                          <i class="icon fa fa-check"></i>  
                                         {{ Session::get('flash_alert_notice') }} 
                                         </div>
                                    @endif
                                     
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-hover">
                                            <tbody><tr>
                                                    <th>ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Group Name</th>
                                                    <th>SignUp Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                @if(count($users)==0)
                                                    <tr>
                                                      <td colspan="7">
                                                        <div class="alert alert-danger alert-dismissable">
                                                          <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                          <i class="icon fa fa-check"></i>  
                                                          {{ 'Record not found. Try again !' }}
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  @endif
                                                @foreach ($users as $key => $user)  
                                                <tr>
                                                    <td>{{ $user->UserID }}</td>
                                                    <td>{{ $user->FirstName.' '.$user->LastName }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $users[$key]->group['Title']}}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>
                                                        <span class="label label-{{ ($user->enable==2)?'success':'warning'}} status" id="{{$user->UserID}}" data="{{$user->enable}}" onclick="changeStatus({{$user->UserID}},'user')" >
                                                            {{ ($user->enable==2)?'Active':'Inactive'}}
                                                        </span>
                                                    </td>
                                                    <td> 
                                                        <a href="{{ route('user.edit',$user->UserID)}}">
                                                            <i class="fa fa-fw fa-pencil-square-o" title="edit"></i> 
                                                        </a>

                                                        {!! Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$user->UserID, 'route' => array('user.destroy', $user->UserID))) !!}
                                                        <button class="delbtn" type="submit"><i class="fa fa-fw fa-trash" title="Delete"></i></button>
                                                        {!! Form::close() !!}

                                                    </td>
                                                </tr>
                                                @endforeach 
                                            </tbody></table>
                                    </div><!-- /.box-body -->
                                    <div class="pull-right">  {!! $users->appends(['GroupID' => isset($_GET['GroupID'])?$_GET['GroupID']:'','search' => isset($_GET['search'])?$_GET['search']:''])->render() !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>  
        <!-- Main row --> 
    </section><!-- /.content -->
</div> 

@stop
