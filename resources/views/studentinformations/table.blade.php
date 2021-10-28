<div class="table-responsive">
    <table class="table" id="studentinformations-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Age</th>
        <th>Contactno</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Citizenship</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($studentinformations as $studentinformations)
            <tr>
                <td>{{ $studentinformations->Name }}</td>
            <td>{{ $studentinformations->Age }}</td>
            <td>{{ $studentinformations->ContactNO }}</td>
            <td>{{ $studentinformations->Address }}</td>
            <td>{{ $studentinformations->Gender }}</td>
            <td>{{ $studentinformations->Citizenship }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['studentinformations.destroy', $studentinformations->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('studentinformations.show', [$studentinformations->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('studentinformations.edit', [$studentinformations->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
