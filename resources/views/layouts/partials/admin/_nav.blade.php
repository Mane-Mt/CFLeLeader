<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin">Admin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="/"><i class="fa fa-home fa-fw"></i>{{config('app.name')}}</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li> --}}
                            <li class="divider"></li>
                            <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="/admin" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw" aria-hidden="true" title="Copy to use graduation-cap">&#xf19d</i>Formation<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/admin/addFormation">Nouvelle Formation</a>
                                    </li>
                                    <li>
                                        <a href="/admin/showFormations">Listes des formations</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                             <a><i class="fa fa-fw">&#xf0c0</i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/addUser">Nouvelle utilisateur</a>
                                </li>
                                <li>
                                    <a href="/admin/listUser">liste des utilisateurs</a>
                                </li>
                            </ul>
                            </li>
                            <li>
                            <a><i class="fa fa-bar-chart-o fa-fw"></i> Les Inscrits<span class="fa arrow"></span>
                                 </a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="/admin/listeDesInscrits">Liste de tout les inscrits</a>
                                    </li>
                                    <li>
                                        <a href="/admin/listUserByFormation">Liste par formation</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw" >&#xf1ea</i> Actualité<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                    <a href="/admin/publierActualite">Nouvelle Actualités</a>
                                    </li>
                                    <li>
                                    <a href="/admin/ListeDesActualites">Liste des Actualités</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw" aria-hidden="true" >&#xf21d</i>Formateurs<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                    <a href="/admin/addFormateur">Nouveau Formateur</a>
                                    </li>
                                    <li>
                                    <a href="/admin/ListeDesFormateurs">Liste des Formateurs</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
