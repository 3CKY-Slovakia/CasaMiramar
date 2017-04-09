<div class="booking-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">

                <form class="b-form group" method="post" action="booking.php">
                    <div class="arrival group">
                        <input type="text" name="arrive" id="arrive" class="datepicker" placeholder="arrive">
                    </div>

                    <div class="departure group">
                        <input type="text" name="depart" id="depart" class="datepicker" placeholder="depart">
                    </div>

                    <div class="adults group">
                        <select name="guests" id="guests" class="dk">
                            <option selected disabled>adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="room group">
                        <select name="room_select" id="room_select" class="dk">
                            <option selected disabled>room</option>
                            <option value="1">Single</option>
                            <option value="2">Deluxe Double</option>
                            <option value="3">Suite I</option>
                            <option value="4">Suite II</option>
                            <option value="5">King's Suite</option>
                        </select>
                    </div>

                    <div class="bookbtn group">
                        <button type="submit">book now</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div> <!-- .booking-wrap -->