<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{url('/')}}"><img src="{{asset('app-assets/images/logo/materialize-logo.png')}}" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="navigation-header"><a class="navigation-header-text">Klasemen Liga</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="{{(request()->is('klasemen*')) ? 'active' : ''}} bold">
            <a class="{{(request()->is('klasemen*')) ? 'active' : ''}} waves-effect waves-cyan" href="{{url('klasemen')}}">
            <i class="material-icons dp48">dashboard</i>
                <span class="menu-title" data-i18n="klasemen">Klasemen</span>
            </a>
        </li>
        <li class="{{(request()->is('club*')) ? 'active' : ''}} bold">
            <a class="{{(request()->is('club*')) ? 'active' : ''}} waves-effect waves-cyan" href="{{url('club')}}">
                <i class="material-icons">people</i>
                <span class="menu-title" data-i18n="club">Club</span>
            </a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
