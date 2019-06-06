<li class="nav-item dropdown">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <img class="img-avatar" src="{{ backpack_avatar_url(backpack_auth()->user()) }}" alt="{{ backpack_auth()->user()->name }}">
  </a>
  <div class="dropdown-menu dropdown-menu-right">
    <div class="dropdown-header">
    <a class="dropdown-item" href="{{ route('backpack.account.info') }}">
      <i class="fa fa-user"></i> {{ trans('backpack::base.my_account') }}</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ backpack_url('logout') }}">
      <i class="fa fa-lock"></i> {{ trans('backpack::base.logout') }}</a>
  </div>
</li>