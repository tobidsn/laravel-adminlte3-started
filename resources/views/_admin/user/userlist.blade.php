<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th style="width: 2%">{{ __('#') }}</th> 
        <th style="width: 15%">{{ __('Dislay Name') }}</th>
        <th style="width: 10%">{{ __('Email') }}</th>
        <th style="width: 10%">{{ __('Group') }}</th> 
        <th style="width: 10%">{{ __('Last Login') }}</th>
        <th style="width: 10%">{{ __('Actions') }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($user as $datas=>$users)
            <tr id="row_{{$users->id}}">
                <td>
                    <span>{{ $datas + $user->firstItem() }}</span>
                </td> 
                <td>
                    <span>{{ $users->name }}</span>
                </td>
                <td>
                    <span>{{ $users->email }}</span>
                </td>
                <td>
                    <span class="badge badge-{{ ($users->usertype == 'admin') ? 'info' : 'warning' }}">{{ ucfirst($users->usertype) }}</span>
                </td>
                <td>
                    {{$users->updated_at}}
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{action('Admin\UsersController@edit', $users->id)}}"><i class="fa fa-pencil"></i> Edit</a>
                             
                            @if($users->usertype != 'admin')
                                <a class="dropdown-item" onclick="user_action({{$users->id}}, 'destroy')" href="javascript:void(0)"><i class="fa fa-trash"></i> Delete </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
Showing {{$user->count()}} of {{$user->total()}} entries<br>
{{$user->render()}} 


