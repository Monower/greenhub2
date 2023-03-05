@include('templates.header')
@include('templates.navbar')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<section class="container mx-auto flex justify-center pt-[30px]">
    <h3 class="text-[20px] font-bold text-[#1c92da] underline">Bookmarked Projects</h3>        
</section>
<section class="container mx-auto pt-5 flex flex-col-2 justify-center gap-5">
    <div class="flex flex-col gap-3">
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center space-x-[170px]">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <a title="unbookmark this repository" type="button" href="#"><i class="fa-solid fa-bookmark"></i></a>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
    </div>
    <div class="flex flex-col gap-3">
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
        <div class="bg-slate-50 border border-[#1f1f1f] rounded-md w-[370px] h-[85px] flex items-center justify-between">
            <div>
                <h3 class="text-[20px] font-bold">Repository Name</h3>
                <p>repository description</p>
            </div>
            <p>bookmark icon will be here</p>
        </div>
    </div>
</section>




















@include('templates.footer')