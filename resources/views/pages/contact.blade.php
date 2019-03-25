@extends('layouts.default')
@section('content')
    <div class='card mt-3 pl-3 pr-3'>
        <div class='card-title'><h1>Contact</h1>
            <p class="lead">To contact site owner, fill out the form below and submit. </p>

            <form method="post" action="{{route('contact.store')}}" >
                @csrf
                <div class="form-group">
                    {{--<label for="email">Email address</label>--}}
                    <input name='email' type="email" class="form-control" id="email" placeholder="Example@Email.com" required>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <input name = 'first_name' type="text" class="form-control" id = 'first_name' placeholder="First name" required>
                        </div>
                        <div class="col">
                            <input name = 'last_name' type="text" class="form-control" id = 'last_name' placeholder="Last name" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Pricing/Sales</option>
                        <option>Billing/Payment</option>
                        <option>Technical Support</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>Pricing/Sales</option>
                        <option>Billing/Payment</option>
                        <option>Technical Support</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    {{--<label for="body">Message</label>--}}
                    <textarea name='body' class="form-control" id="message" rows="3" placeholder="Message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </form>
        </div>
    </div>

@endsection
