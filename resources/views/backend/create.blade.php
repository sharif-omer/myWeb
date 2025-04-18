
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span></h2>

    <div class="form-info">

       <form action="{{route('contact.store')}}"  method="POST">
         @csrf 
           <div class="input-box">
               <input type="text" placeholder="Inter Your Name" name="name" required>             
               <input type="email" placeholder="Inter Your Email" name="email" required>
                  
           </div>
           <div class="input-box">
               <input type="number" placeholder="Inter Your Number" name="number" required>
               <input type="text" placeholder="Subject" name="subject" required>
           </div>
           <textarea name="message" id="" placeholder="Your Message" required></textarea>
           <input type="submit" value="Send Messge" class="btn">
        </form>
    </div>

  
