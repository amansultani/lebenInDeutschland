<x-layout>
    <div class="container mx-auto px-4 py-10 rtl">
        <!-- Header Section -->
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700">به برنامه آزمون شهروندی خوش آمدید</h1>
            <p class="text-lg text-gray-600 mt-4">برای آمادگی در آزمون شهروندی خود با آزمون‌های تعاملی و بازخورد
                شخصی‌سازی‌شده آماده شوید.</p>
        </header>

        <!-- About the Application -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">درباره برنامه</h2>
            <p class="text-gray-700 leading-relaxed">
                این برنامه برای کمک به کاربران در آماده‌سازی برای آزمون شهروندی به‌طرز منحصر به‌فرد و جذاب طراحی شده
                است. این آزمون شامل مجموعه‌ای از سوالات عمومی و سوالات اضافی خاص به ایالت کاربر می‌باشد. با یک رابط
                کاربری دوستانه، بازخورد شخصی‌سازی‌شده و پشتیبانی زبانی، این برنامه یک راه مؤثر برای مطالعه را ارائه
                می‌دهد.
            </p>
        </section>

        <!-- Key Features -->
        <section class="bg-blue-50 p-6 rounded-lg mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">ویژگی‌های کلیدی</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>آزمون‌های تعاملی:</strong> با سوالات انتخاب‌شده به‌صورت تصادفی هر بار که آزمون می‌دهید،
                    تمرین کنید.</li>
                <li><strong>محتوای محلی‌شده:</strong> این آزمون به چندین زبان از جمله آلمانی، انگلیسی، دری و پشتو در
                    دسترس است، با محتوایی که بر اساس انتخاب کاربر نمایش داده می‌شود.</li>
                <li><strong>سوالات خاص ایالت:</strong> هر آزمون شامل سوالاتی است که به ایالت انتخاب‌شده متناسب است تا
                    تجربه‌ای شخصی‌سازی‌شده ارائه دهد.</li>
                <li><strong>بازخورد فوری:</strong> پاسخ‌ها به‌صورت آنی به عنوان درست یا نادرست علامت‌گذاری می‌شوند و به
                    شما امکان می‌دهند در حین یادگیری، بازخورد دریافت کنید.</li>
                <li><strong>بررسی امتیاز نهایی:</strong> پاسخ‌های خود را بررسی کرده و بعد از هر آزمون امتیاز خود را
                    مشاهده کنید تا پیشرفت خود را پیگیری کنید.</li>
            </ul>
        </section>

        <!-- How It Works -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">نحوه کار</h2>
            <ol class="list-decimal pl-6 space-y-2">
                <li>ایالت خود را از لیست گزینه‌ها انتخاب کنید تا شروع کنید.</li>
                <li>به ۳۳ سوال پاسخ دهید: ۳۰ سوال عمومی و ۳ سوال خاص ایالت.</li>
                <li>هر سوال دارای چهار گزینه چند گزینه‌ای است. گزینه‌ای که فکر می‌کنید درست است را انتخاب کنید.</li>
                <li>بازخورد فوری نشان می‌دهد آیا انتخاب شما درست یا نادرست است و به شما کمک می‌کند در لحظه یاد بگیرید.
                </li>
                <li>پس از اتمام، امتیاز نهایی شما به همراه خلاصه‌ای از پاسخ‌های درست نمایش داده خواهد شد.</li>
            </ol>
        </section>

        <!-- Start Quiz Button -->
        <div class="text-center">
            <a href="{{ route('test.list') }}"
                class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                آزمون خود را شروع کنید
            </a>
        </div>
    </div>
</x-layout>
