
<style>
.contact
{
    padding-top: 8.5rem;
}
.cake-contact
{
    width: 100%;
    background: whitesmoke;
}
.cake-contact-row
{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.cake-contact-col
{
    margin: 2rem;
    flex: 1 1 20rem;
    text-align: center;
}
.cake-contact-col .imgs
{
    border: 1px solid #fff;
}
.cake-contact-col img
{
    width: 90%;
    height: auto;
    margin:1.5rem;
    padding: 1rem;
    flex:1 1 21rem;
    border:1px solid transparent;
    border-radius:1rem;
}
.cake-contact-col h1
{
    padding: 1rem 0;
    color: rgb(236,35,119);
    letter-spacing: .1rem;
}
.cake-contact-col .social i
{
    padding:.8rem;
    border: none;
    border-radius: 1rem;
    background: rgb(236,35,119);
    color:#fff;
    font-size:1.5rem;
}
.cake-contact-col .social i:hover
{
    background: limegreen;
    color: #fff;
    transition: .5s ease;
}
.cake-contact-col p
{
    padding:.5rem 0;
    line-height:1.5rem;
    color: gray;
}
.cake-contact-col input,
.cake-contact-col textarea
{
    width: 80%;
    padding:1rem;
    margin-bottom: 1.2rem;
    border:none;
    border-bottom: .1rem dotted rgb(236,35,119);
}
.cake-contact-col textarea
{
    resize: none;

}
</style>
 
<class class="contact" id="contact">
<div class="cake-contact">
        <div class="cake-contact-row">
            <div class="cake-contact-col">
                <img src="photo 2pine apple.jpg" alt="img" class="imgs">
            </div>
            <div class="cake-contact-col">
                <h1>Contact Us</h1>
                <div class="social">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                </div>
                <p>Exploring new horizons and loving every moment. 🌍❤️ <br> With "The Sweet Spot"</p>
                <p>We Want To Here From You, Write For Us: </p>
                <from action="#" method="GAT">

                <input type="text" name="name"  id="name" placeholder="Please enter your name"required>
                <input type="text" name="email" id="email" placeholder="Please enter your email"required>
                    <input type="mobile" name="mobile" id="mobile" placeholder="Please Enter Your mobile " required>
                    <textarea name="" id="" cols="10" rows="8" placeholder="Please Give Your Opinion"></textarea>
                </from>
            </div>
        </div>
        
<script src="sweetalert.min.js"></script>
<form method ="POST" action="do-something.php" onsubmit="return SubmitForm(this);">
    <input type="Submit"/>
</form>
<script>
    function SubmitForm(form){
        swal({
            title:"are you sure?",
            text:"this form will be submitted",
            icon:"warning",
            buttons:true,
            dangerMode:true,
        
        })
        
        .then((isOkay0)=>{
            if(isOkay){
                form.Submit();
            }
        });
        return false
    }
</script>
