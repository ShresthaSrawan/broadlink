<div class="uk-width-1-5 bl-block-primary">
    <div class="uk-cover-background">
        <img src="{{ user_avatar('user', 190) }}" class="uk-width-1-1 avatar">
    </div>
    <div class="bl-padding uk-block-default bl-block-primary-lightest">
        {{ $user->display_name }}
    </div>
    <div class="details bl-padding bl-block-primary-lighter">
        <ul class="fa-ul">
            <li>
                <a href="{{ route('user::edit') }}">
                    <i class="fa-li material-icons">&#xE853;</i>
                    Update your profile
                </a>
            </li>
            <li>
                <i class="fa-li material-icons">&#xE0DA;</i>
                <a href="#">Change password</a>
            </li>
            <li>
                <i class="fa-li material-icons">&#xE5C3;</i>
                <a href="{{ route('service::index') }}">Discover more features</a>
            </li>
        </ul>
    </div>
</div>