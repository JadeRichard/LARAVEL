<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    {{-- <p>{{ $data["message"] }}</p> --}}


    <form id="contact" action='{{ route('mail') }}' method="get">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h6>Contact us</h6>
              <h4>Say <em>Hello</em></h4>
              <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset>
              <textarea name="message" id="message" placeholder="Your Message" ></textarea>
            </fieldset>
          </div>
          <div class="col-lg-12">
            <fieldset >
                
                <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
            
              </fieldset>
          </div>
        </div>
      </form>






</body>
</html>