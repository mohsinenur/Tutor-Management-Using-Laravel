{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tution') }}"><i class="nav-icon la la-question"></i> Tutions</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tutor') }}"><i class="nav-icon la la-question"></i> Tutors</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('message') }}"><i class="nav-icon la la-question"></i> Messages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('admin-contact') }}"><i class="nav-icon la la-question"></i> Admin contacts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user-report') }}"><i class="nav-icon la la-question"></i> User reports</a></li>