<div class="member-form-wrapper">
    <section class="member-form-details">
        <h2 class="member-form-heading">members are our favorite contacts</h2>
        <p class="member-form-body">Membership is the ultimate way to contribute. Complete the form to be notified when PGC membership tokens become available.</p>
    </section>
    <form
        class="member-form">
            <section class="member-form-inputs">
                <label for="alias">
                    Alias
                    <input 
                        class="member-form-input" 
                        id="member-alias" 
                        type="text" 
                        name="alias"
                        required>
                </label>
           
                <label for="phone_number">
                    phone number
                    <input 
                        class="member-form-input" 
                        type="tel" 
                        id="member-phone-number"
                        name="phone_number"
                        pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                        placeholder="1233210110"
                        required>
                </label>
            </section>

            <section class="member-form-controls">
                <label for="form-submit">
                    <input 
                        class="member-form-input"
                        id="member-form-submit"
                        type="submit" 
                        name="">
                </label>
            </section>
    </form>
    <div id="confirm-submit">
        <h2 class="hot-items-heading">we'll be in touch!</h2>    
    </div>
</div>