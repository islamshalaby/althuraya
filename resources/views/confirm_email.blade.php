<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link href="{{ $message->embed(public_path() . '/front/assets/css/email/style.css') }}" rel="stylesheet" />
    <title></title>
</head>
<body style="text-align:center;">
    <table width="75%" align="center" border="0">
        <tr>
            <td class="img"><img src="https://res.cloudinary.com/{{ cloudinary_app_name() }}/image/upload/w_50/v1581928924/{{ $settings->logo }}" /></td>
            <td><h2>framepergame.com.kw</h2></td>
        </tr>

        <tr>
            <td colspan="3" style="text-align:left;">
                <h4>{{ $user->name }} Is Added Successfully Check You Email For Authorization Message, Click this <a href="{{ route('front.activate.account', $user->remember_token) }}">Link</a>, Then Your Account Will Be Activated.</h4>
            </td>
        </tr>

        <tr>
            <td style="text-align:left;" width="15%"><h4>Contact us:</h4></td>
            <td style="text-align:left; vertical-align:middle;">
                <a href="mailto: info@framepergame.com" style="text-decoration:none;">{{ $settings->email }}</a>
                <img src="{{ $message->embed(public_path() . '/front/assets/img/email/email.png') }}" width="2.5%" />
            </td>
            <td style="vertical-align:middle; text-align:left;">
                <a href="tel:{{ $settings->phone }}" style="text-decoration:none;">{{ $settings->phone }}</a>
                <img src="{{ $message->embed(public_path() . '/front/assets/img/email/call.png') }}" width="2.5%" />
            </td>
        </tr>
    </table>

</body>
</html>