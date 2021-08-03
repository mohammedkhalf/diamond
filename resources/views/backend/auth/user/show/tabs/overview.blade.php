<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.avatar')</th>
                <td><img src="https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028.jpg?s=80&d=mm&r=g" class="user-profile-image" /></td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.code')</th>
                <td>{{ $user->code }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.name')</th>
                <td>{{ $user->name }}</td>
            </tr>

            {{-- <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.email')</th>
                <td>{{ $user->email }}</td>
            </tr> --}}


            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.phone_number')</th>
                <td>{{ $user->phone_number }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.address')</th>
                <td>{{ $user->address }}</td>
            </tr>


            {{-- <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.status')</th>
                <td>@include('backend.auth.user.includes.status', ['user' => $user])</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.confirmed')</th>
                <td>@include('backend.auth.user.includes.confirm', ['user' => $user])</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.timezone')</th>
                <td>{{ $user->timezone }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.last_login_at')</th>
                <td>
                    @if($user->last_login_at)
                        {{ timezone()->convertToLocal($user->last_login_at) }}
                    @else
                        N/A
                    @endif
                </td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.last_login_ip')</th>
                <td>{{ $user->last_login_ip ?? 'N/A' }}</td>
            </tr> --}}
        </table>
    </div>
</div><!--table-responsive-->
