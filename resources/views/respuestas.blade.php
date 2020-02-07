<table>
    <tr>
        <th>Nombre</th>
        <th>Confirmo</th>
    </tr>
    @foreach($invitations as $invitation)
        <tr>
            <td>{{ $invitation->name }}</td>
            <td>
            @if($invitation->attend)
                    <span style="background-color: green;padding: 5px;color: white;">Si</span>
                @else
                No
                @endif
            </td>
        </tr>
    @endforeach
</table>


