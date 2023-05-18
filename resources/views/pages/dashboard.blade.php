@extends('template.page')

@section('page_header')
{{-- @include('partials.header.default')  --}}
@endsection

@section('page_content')

<div class="card primar">
    <div class="card-header ui-sortable-handle">
        <h3 class="card-title">Direct Chat</h3>
        <div class="card-tools">
            <span title="3 New Messages" class="badge badge-primary">3</span>
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                <i class="fas fa-comments"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="">
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                </div>

                <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

                <div class="direct-chat-text">
                    Is this template really for free? Thats unbelievable!
                </div>

            </div>


            <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                </div>

                <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

                <div class="direct-chat-text">
                    You better believe it!
                </div>

            </div>


            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                </div>

                <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

                <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                </div>

            </div>


            <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                </div>

                <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

                <div class="direct-chat-text">
                    I would love to.
                </div>

            </div>

        </div>



    </div>

    <br>


    <div class="card-footer">
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                </span>
            </div>
        </form>
    </div>

</div>

<br>

<div class="direct-chat-messages">
    <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">Alexander Pierce</span>
            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
        </div>

        <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

        <div class="direct-chat-text">
            Is this template really for free? Thats unbelievable!
        </div>
    </div>



    <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">Sarah Bullock</span>
            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
        </div>

        <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

        <div class="direct-chat-text">
            You better believe it!
        </div>

    </div>


    <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">Alexander Pierce</span>
            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
        </div>

        <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

        <div class="direct-chat-text">
            Working with AdminLTE on a great new app! Wanna join?
        </div>

    </div>


    <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">Sarah Bullock</span>
            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
        </div>

        <img class="direct-chat-img" src="{{ URL::asset('img/user.png') }}" alt="message user image">

        <div class="direct-chat-text">
            I would love to.
        </div>

    </div>

</div>


@endsection
