<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/logo2.png') }}"alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('dashboard') }}">
                <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
            </a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="menu-box sidebar-fontello">
                        <ul>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                    href="{{ route('dashboard') }}"><i
                                        data-feather="home"></i><span>{{ trans('file.dashboard') }}</span></a></li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="users"></i><span>{{ trans('officer.officer_hisotry') }}</span></a>
                                {{-- <ul class="sidebar-submenu">
                                    <li><a
                                            href="{{ route('officer.dashboard') }}">{{ trans('officer.list_officer') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('leave-balance') }}">{{ trans('officer.buttonPrintCard') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('leave-balance') }}">{{ trans('officer.list_of_termination_officers') }}</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="clock"></i><span>{{ trans('schedule.schedule') }}</span></a>
                                {{-- <ul class="sidebar-submenu">
                                    <li><a href="{{ route('leave-approve') }}">{{ trans('schedule.meeting_type') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('leave-balance') }}">{{ trans('schedule.meeting_schedule') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('leave-balance') }}">{{ trans('trans.buttonNew') }}{{ trans('schedule.meeting_room') }}</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i
                                        data-feather="activity"></i><span>{{ trans('attendance.attendance_management') }}</span></a>
                                {{-- <ul class="sidebar-submenu">
                                    <li><a href="{{ route('attendance') }}">{{ trans('attendance.attendance') }}</a>
                                    </li>
                                    <li><a href="{{ route('leave-approve') }}">Leave Approval</a></li>
                                    <li><a href="{{ route('leave-balance') }}">Leave Balance</a></li>
                                    <li><a href="{{ route('leave-request') }}">Leave Request</a></li>
                                    <li><a href="{{ route('leave-view') }}">Leave View</a></li>
                                    <li><a href="{{ route('shift-roster') }}">Shift Roster</a></li>
                                    <li><a href="{{ route('permission-leave') }}">Leave Report</a></li>
                                </ul> --}}
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="user"></i><span>{{ trans('users.user') }}</span></a>
                                <ul class="sidebar-submenu">
                                    {{-- <li><a href="{{ route('attendance') }}">{{ trans('attendance.attendance') }}</a>
                                    </li> --}}
                                    {{-- <li><a href="{{ route('roles.index') }}">{{ trans('users.userRole') }}</a></li> --}}
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="briefcase"></i><span>{{ trans('attendance.mission') }}</span></a>
                                <ul class="sidebar-submenu">
                                    {{-- <li><a href="{{ route('attendance') }}">{{ trans('mission.mission_type') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('leave-approve') }}">{{ trans('document.setting') }}{{ trans('mission.mission') }}</a>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="file-text"></i><span>{{ trans('attendance.report') }}</span></a>
                                <ul class="sidebar-submenu">
                                    {{-- <li><a
                                            href="{{ route('attendance') }}">{{ trans('attendance.attendance_daily_report') }}</a>
                                    </li>
                                    <li><a href="{{ route('shift-roster') }}">Shift Roster</a></li> --}}
                                </ul>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="calendar"
                                        style="stroke: 0.5;"></i><span>{{ trans('public_holiday.holiday') }}</span></a>
                                <ul class="sidebar-submenu">
                                    {{-- <li><a
                                            href="{{ route('attendance') }}">{{ trans('public_holiday.national_holiday') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('attendance') }}">{{ trans('public_holiday.national_holiday') }}</a>
                                    </li> --}}
                                </ul>
                            </li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                        data-feather="settings"></i><span>{{ trans('users.system_Setting') }}</span></a>
                                <ul class="sidebar-submenu">
                                    {{-- <li><a
                                            href="{{ route('attendance') }}">{{ trans('public_holiday.national_holiday') }}</a>
                                    </li>
                                    <li><a
                                            href="{{ route('attendance') }}">{{ trans('public_holiday.national_holiday') }}</a>
                                    </li> --}}
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
