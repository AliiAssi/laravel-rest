<div class="contact-form">
    <form id="contact" action="{{url('/reservation')}}" method="post">
        @csrf
      <div class="row">
        <div class="col-lg-12">
            <h4>Table Reservation</h4>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
          </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
        </fieldset>
        </div>
        <div class="col-lg-6 col-sm-12">
          <fieldset>
            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
          </fieldset>
        </div>
        <div class="col-md-6 col-sm-12">
          <fieldset>
            <select  name="numberguests" id="number-guests">
                <option value="number-guests" disabled>Number Of Guests</option>
                <option value="1" id="1">1</option>
                <option value="2" id="2">2</option>
                <option value="3" id="2">3</option>
                <option value="4" id="2">4</option>
                <option value="5" id="2">5</option>
                <option value="6" id="2">6</option>
                <option value="7" id="2">7</option>
                <option value="8" id="2">8</option>
            </select>
          </fieldset>
        </div>
        <div class="col-md-6 col-sm-12">
            <fieldset>
              <select name="time" id="time">
                  <option value="time">Time</option>
                  <option value="Breakfast" id="Breakfast">Breakfast</option>
                  <option value="Lunch" id="Lunch">Lunch</option>
                  <option value="Dinner" id="Dinner">Dinner</option>
              </select>
            </fieldset>
          </div>
          <div class="col-md-6 col-sm-12">
            <input type="date" name="date" id="" required>
          </div>
        <div class="col-lg-12">
          <fieldset>
            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
          </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset>
            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
          </fieldset>
        </div>
      </div>
    </form>