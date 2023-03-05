@include('templates.header')
@include('templates.navbar')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- body start -->
    <div class="container mx-auto grid grid-cols-3 gap-12 pt-5 pb-[70px]">
        <div class="col-span-2 flex flex-col gap-3">
            <div class="bg-slate-400 flex justify-between h-[50px] items-center px-2 rounded-md">
                <h3 class="text-[20px] font-bold">Repository/hello.ph</h3>
                <div class="flex space-x-5">
                    <a title="download this file" type="button" href="#"><i class="fa-solid fa-download"></i></a>
                    <a title="delete this file" type="button" href="#"><i class="fa-solid fa-trash-can"></i></a> 
                </div>

            </div>
            <div class="bg-slate-300 p-3 rounded-md">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos corporis accusamus iusto mollitia fugit quaerat animi eligendi. Enim voluptate maxime asperiores ipsa aspernatur officiis consectetur explicabo quam exercitationem distinctio.
                Tempore non, ab soluta neque suscipit commodi nostrum omnis ex pariatur illum repudiandae, eveniet modi eos? Voluptatibus quis, expedita quam enim sit ipsam aliquam repudiandae doloremque earum non doloribus ea?
                Illo dicta, delectus reiciendis molestiae dolorem reprehenderit vel aliquam, aspernatur expedita nisi accusantium quisquam officiis error commodi repellendus voluptate consequatur harum voluptatum similique minima. A excepturi id cumque animi blanditiis.
                Dolore cupiditate facere quidem nihil, enim quis aliquam eveniet voluptate error blanditiis itaque quos excepturi expedita, molestias inventore accusantium, labore recusandae voluptatibus delectus suscipit. Quos accusamus doloribus non atque assumenda.
                Consequatur facere maiores excepturi neque quisquam ex quod minima! Voluptatibus recusandae quaerat aliquid odit ducimus fugit, officiis fuga doloribus reiciendis, maxime autem sequi cumque molestias omnis dolorem veritatis harum animi.
                Sint, ea architecto cum itaque error et corrupti voluptate animi numquam illum excepturi, vero perferendis recusandae voluptatibus inventore, quam quidem natus nobis facere id dolore rerum. Tenetur repellendus ratione provident!
                Veritatis sapiente iusto voluptas, eveniet nam voluptatem harum magni modi quia placeat aut quam molestias minima! Velit, iste aperiam. Architecto ea itaque sunt. Hic dolorum quaerat eveniet saepe. Temporibus, mollitia?
                Voluptatum, ullam commodi alias amet facilis nobis hic tempore nihil doloremque expedita blanditiis totam repudiandae consequuntur sequi reprehenderit libero, iste harum dignissimos pariatur repellat ex recusandae! Amet sequi facilis fugit.
                Voluptatem quod earum odio facere at voluptatum pariatur veritatis, sed distinctio reprehenderit quis aut, iure quos repellat exercitationem ratione veniam? Non ex incidunt aliquid sed optio ut vitae neque distinctio.
                Praesentium debitis ex eum, rerum laborum, odit dolor fugiat labore officiis velit et, natus neque ratione blanditiis excepturi molestias cum? Nulla dolorum adipisci nobis id laborum aliquid commodi nesciunt doloremque!</p>
            </div>
        </div>
        <div class="flex flex-col justify-start">
            <h3 class="text-[20px] font-bold">Comments:</h3>
            <form action="" method="post">
                <div class="flex flex-col gap-2">
                    <textarea class="border border-slate-400 rounded-md px-2" placeholder="Add comment..." name="" id="" cols="30" rows="1"></textarea>
                    <button class="bg-[#1c92da] w-[120px] rounded-md h-[30px] text-[#FFFFFF] font-mono" type="submit">comment</button>
                </div>

            </form>



            <div class="pt-5 flex items-center space-x-2">
                <img src="images/flower-729512__340.jpg" class="w-[35px] h-[35px] rounded-full" alt="">
                <div>
                    <h3 class="text-[18px] font-semibold">Demo name</h3>
                    <p>demo comment</p>
                </div>
            </div>
            <div class="pt-5 flex items-center space-x-2">
                <img src="images/flower-729512__340.jpg" class="w-[35px] h-[35px] rounded-full" alt="">
                <div>
                    <h3 class="text-[18px] font-semibold">Demo name</h3>
                    <p>demo comment</p>
                </div>
            </div>
            <div class="pt-5 flex items-center space-x-2">
                <img src="images/flower-729512__340.jpg" class="w-[35px] h-[35px] rounded-full" alt="">
                <div>
                    <h3 class="text-[18px] font-semibold">Demo name</h3>
                    <p>demo comment</p>
                </div>
            </div>
            <div class="pt-5 flex items-center space-x-2">
                <img src="images/flower-729512__340.jpg" class="w-[35px] h-[35px] rounded-full" alt="">
                <div>
                    <h3 class="text-[18px] font-semibold">Demo name</h3>
                    <p>demo comment</p>
                </div>
            </div>
            <div class="pt-5 flex items-center space-x-2">
                <img src="images/flower-729512__340.jpg" class="w-[35px] h-[35px] rounded-full" alt="">
                <div>
                    <h3 class="text-[18px] font-semibold">Demo name</h3>
                    <p>demo comment</p>
                </div>
            </div>


        </div>
    </div>
    <!-- body end -->















@include('templates.footer')