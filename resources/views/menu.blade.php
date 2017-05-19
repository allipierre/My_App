<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home"><img src="http://res.cloudinary.com/candidbusiness/image/upload/v1455406304/dispute-bills-chicago.png" alt="Logo Image">
        </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active st"><a href="home">Home<!--<?php $user = Auth::user();   echo "$user[name]";?>--></a></li>
            <li class="st"><a href="/about">About</a></li>
            <li class="st"><a href="contact">Contact</a></li>
            <li class="teste"><a href="teste">Test</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle st" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="datatable">Action</a></li>
                <li><a href="student">Another action</a></li>
                <li><a href="login">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>


              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <span class="glyphicon glyphicon-user">&nbsp;</span>{{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              <span class="glyphicon glyphicon-log-out">&nbsp;</span>Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          </ul>
        </div><!--/.nav-collapse -->
