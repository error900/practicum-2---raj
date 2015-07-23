<table class="table table-striped table-bordered table-condensed">
<thead>
    <tr>
        <th class="col-lg-1" style="text-align: center;">Id</th>
        <th class="col-lg-1">{{ trans('syntara::all.name') }}</th>
        <th class="col-lg-2">{{ trans('syntara::permissions.value') }}</th>
        <th class="col-lg-2">{{ trans('syntara::permissions.description') }}</th>
        @if($currentUser->hasAccess(Config::get('syntara::permissions.showPermission')))
        <th class="col-lg-1" style="text-align: center;">{{ trans('syntara::all.show') }}</th>
        @endif
        @if($currentUser->hasAccess(Config::get('syntara::permissions.deletePermission')))
        <th class="col-lg-1" style="text-align: center;"><input type="checkbox" class="check-all"></th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($permissions as $permission)
    <tr>
        <td style="text-align: center;">{{ $permission->getId() }}</td>
        <td>&nbsp;{{ $permission->getName() }}</td>
        <td>&nbsp;{{ $permission->getValue() }}</td>
        <td>&nbsp;{{ $permission->getDescription() }}</td>
        @if($currentUser->hasAccess(Config::get('syntara::permissions.showPermission')))
        <td style="text-align: center;">&nbsp;<a href="{{ URL::route('showPermission', $permission->getId()) }}">{{ trans('syntara::all.show') }}</a></td>
        @endif
        @if($currentUser->hasAccess(Config::get('syntara::permissions.deletePermission')))
        <td style="text-align: center;">
            <input type="checkbox" data-permission-id="{{ $permission->getId(); }}">
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
</table>

<div class="row upper-menu">
    {{ $permissions->links(); }}

    <div style="float:right;">
        @if($currentUser->hasAccess(Config::get('syntara::permissions.deletePermission')))
        <a id="delete-item" class="btn btn-danger">{{ trans('syntara::all.delete') }}</a>
        @endif

        @if($currentUser->hasAccess(Config::get('syntara::permissions.newPermission')))
        <a class="btn btn-info btn-new" href="{{ URL::route('newPermission') }}">{{ trans('syntara::permissions.new') }}</a>
        @endif
    </div>
</div>