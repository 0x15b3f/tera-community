<x-layouts.admin title="لوحة التحكم">
    <div class="admin">
      <aside class="side">
        <div class="brand">
          <span style="width:36px;height:36px;border-radius:12px;background:rgba(255,255,255,.16);display:flex;align-items:center;justify-content:center;flex:none"><img src="{{ asset('images/logo-icon.svg') }}" width="26" height="26" alt=""></span>
          <div class="wm" style="font-size:19px">تيره<small>لوحة تحكم الأدمن</small></div>
        </div>
        <nav class="snav">
          <a class="on"><svg class="ic"><use href="#i-dash"/></svg>لوحة التحكم</a>
          <a><svg class="ic"><use href="#i-pin"/></svg>الأماكن والخدمات</a>
          <a><svg class="ic"><use href="#i-grid"/></svg>التصنيفات</a>
          <a><svg class="ic"><use href="#i-cap"/></svg>المدرسين والسناتر</a>
          <a><svg class="ic"><use href="#i-tag"/></svg>العروض والإعلانات</a>
          <a><svg class="ic"><use href="#i-news"/></svg>أخبار المجتمع</a>
          <a><svg class="ic"><use href="#i-bus"/></svg>سواقين المواصلات</a>
          <a><svg class="ic"><use href="#i-landmark"/></svg>صفحة عن القرية</a>
          <a><svg class="ic"><use href="#i-heart"/></svg>شهداء القرية</a>
          <a><svg class="ic"><use href="#i-gear"/></svg>الإعدادات</a>
        </nav>
      </aside>
      <main class="amain">
        <div class="atop">
          <h1>أهلاً يا إسماعيل</h1>
          <div class="asearch"><svg class="ic"><use href="#i-search"/></svg>ابحث عن مكان أو خبر…</div>
          <div class="round-btn"><svg class="ic"><use href="#i-bell"/></svg><span class="dot"></span></div>
          <div class="auser"><span class="aua">إ</span>إسماعيل<small style="color:var(--muted);font-weight:700">· أدمن</small></div>
        </div>

        <div class="astats">
          <div class="astat"><div class="ai t-green"><svg class="ic"><use href="#i-pin"/></svg></div><div><b>١٢٨</b><span>مكان وخدمة مسجلة</span></div></div>
          <div class="astat"><div class="ai t-amber"><svg class="ic"><use href="#i-tag"/></svg></div><div><b>٩</b><span>عروض نشطة دلوقتي</span></div></div>
          <div class="astat"><div class="ai t-blue"><svg class="ic"><use href="#i-news"/></svg></div><div><b>٣٤</b><span>خبر منشور في المجتمع</span></div></div>
          <div class="astat"><div class="ai t-purple"><svg class="ic"><use href="#i-eye"/></svg></div><div><b>١٬٢٤٠</b><span>زيارة النهارده</span></div></div>
        </div>

        <div class="apanel">
          <div class="ph">
            <h2>أحدث الإضافات</h2>
            <span class="abtn-primary"><svg class="ic"><use href="#i-plus"/></svg>إضافة جديدة</span>
          </div>
          <table class="atable">
            <thead><tr><th>المكان</th><th>التصنيف</th><th>التليفون</th><th>الحالة</th><th>آخر تعديل</th><th>إجراءات</th></tr></thead>
            <tbody>
              <tr>
                <td><div class="tcell"><span class="tt t-purple"><svg class="ic"><use href="#i-cap"/></svg></span>أ/ أحمد عبد الله — رياضيات</div></td>
                <td>مدرسين</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>النهارده</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-teal"><svg class="ic"><use href="#i-school"/></svg></span>سنتر المستقبل</div></td>
                <td>سناتر</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>النهارده</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-gray"><svg class="ic"><use href="#i-mobile"/></svg></span>موبايل سمارت</div></td>
                <td>موبايلات</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>أمس</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-blue"><svg class="ic"><use href="#i-steth"/></svg></span>عيادة د. أحمد سمير</div></td>
                <td>عيادات</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>النهارده</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-red"><svg class="ic"><use href="#i-pharma"/></svg></span>صيدلية الشفاء</div></td>
                <td>صيدليات</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>أمس</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-green"><svg class="ic"><use href="#i-fork"/></svg></span>مطعم البركة</div></td>
                <td>مطاعم</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>منذ يومين</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-amber"><svg class="ic"><use href="#i-cart"/></svg></span>سوبر ماركت التوفير</div></td>
                <td>سوبر ماركت</td><td>01xxxxxxxxx</td><td><span class="pill on">ظاهر</span></td><td>منذ ٣ أيام</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
              <tr>
                <td><div class="tcell"><span class="tt t-teal"><svg class="ic"><use href="#i-bus"/></svg></span>ميكروباص خط المركز — كابتن محمود</div></td>
                <td>مواصلات</td><td>01xxxxxxxxx</td><td><span class="pill off">مخفي</span></td><td>الأسبوع الماضي</td>
                <td><div class="rowact"><span><svg class="ic"><use href="#i-edit"/></svg></span><span><svg class="ic"><use href="#i-trash"/></svg></span></div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
</x-layouts.admin>
