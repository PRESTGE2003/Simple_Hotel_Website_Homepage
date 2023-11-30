import './bootstrap';


var select = document.getElementsByClassName('parent')[0];
var options = Array.from(document.getElementsByClassName('options'));
var date = Array.from(document.getElementsByClassName('date'));
var holder = document.getElementById('holder');

select.addEventListener('click', function (){
        select.lastElementChild.classList.toggle('rotate-180');
        document.getElementById('cities').classList.toggle('hidden');
        console.log(select)
})

options.forEach((item)=>{
        item.addEventListener('click', ()=>{
                holder.innerText = item.innerText;
                document.getElementById('cities').classList.toggle('hidden');
        })
})

date.forEach((item)=>{
        item.addEventListener('change', ()=>{
                item.lastElementChild.classList.remove('opacity-0');
        })
})