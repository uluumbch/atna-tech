<table class="subcopy" width="100%" cellpadding="0" cellspacing="0" role="presentation" class="table">
    <tr>
        <td>
            <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                @foreach($rows as $label => $value)
                    <tr>
                        <td width="30%" style="font-weight: bold; text-align: left; padding: 8px;">
                            {{ $label }}
                        </td>
                        <td width="70%" style="text-align: left; padding: 8px;">
                            {{ $value }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>