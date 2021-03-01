
@extends('layouts/adminMaster')
            <!-- Navigation -->
             @section('titre','Dashboard')
            
            @section('main')
                   
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{ getCondNewNumbers('contacts','seen','0') }}</div>
                                            <div>Messages ou Suggestions</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/suggestions">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{getTotatPayement()}}</div>
                                            <div>Montant Total des payements</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="admin/ListeDesPayements">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{getNewNumbers('payements')}}</div>
                                            <div>Transactions au Total!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/ListeDesTransations">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-support fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{getCondNewNumbers('inscriptions','valider','1')}}</div>
                                            <div>Inscrits au Total aux formations</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/admin/listeDesInscrits">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 >Bienvenue sur la page Admin </h1>
                            <img src="{{ asset('assets\img\hero-img.png') }}" alt="{{ __('Admin hero') }}">
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bell fa-fw"></i> Notifications Panel
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="admin/suggestions" class="list-group-item">
                                            <i class="fa fa-comment fa-fw"></i> {{getNews('contacts','seen','0')}} Nouveaux messages
                                                <span class="pull-right text-muted small">
                                                </span>
                                        </a>
                                        <a href="admin/listeDesInscrits" class="list-group-item">
                                            <i class="fa fa-twitter fa-fw"></i> {{getNews('inscriptions','valider','1')}} Nouvelles Inscriptions
                                                <span class="pull-right text-muted small">
                                                </span>
                                        </a>
                                       
                                        <a href="admin/listeDesPayements" class="list-group-item">
                                            <i class="fa fa-money fa-fw"></i>{{getNews('payements','status','approved')}}  Payément réçu
                                                <span class="pull-right text-muted small">
                                                </span>
                                        </a>
                                    </div>
                                    <!-- /.list-group -->
                                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                <!-- /.row -->
        @stop
       

