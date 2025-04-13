   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>

function alert(type,msg){
const btn_class=(type=="success") ? "alert-success" : "alert-danger";
const element=document.createElement('div');
element.innerHTML=`
         <div class="alert  ${btn_class} alert-dismissible  custom-alert show " role="alert" >
            <strong class="me-3 ">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
`;
const existingAlerts = document.querySelectorAll('.custom-alert');
if (existingAlerts.length > 0) {
    existingAlerts[0].remove();
}

setInterval(()=>{
   element.remove();
},2000);
document.body.append(element);

}

</script>