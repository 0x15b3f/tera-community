<x-layouts.app title="الرئيسية">
    <div class="appbar">
      <div class="brand">
        <img src="{{ asset('images/logo-icon.svg') }}" width="36" height="36" alt="">
        <div class="wm">تيره<small>دليل خدمات القرية</small></div>
      </div>
      <div class="grow"></div>
      <div class="loc-chip"><svg class="ic"><use href="#i-pin"/></svg>قرية تيره</div>
      <div class="round-btn"><svg class="ic"><use href="#i-bell"/></svg><span class="dot"></span></div>
    </div>

    <div class="hero">
      <h1>كل خدمات قريتك<br>في مكان واحد</h1>
      <p>مطاعم، عيادات، مدرسين، محلات وأكتر من ١٥٠ خدمة في تيره</p>
      <div class="search"><svg class="ic"><use href="#i-search"/></svg>دوّر على مطعم، دكتور، مدرس، محل موبايل…</div>
      <div class="chips">
        <span class="chip"><svg class="ic"><use href="#i-target"/></svg>الأقرب لي</span>
        <span class="chip"><svg class="ic"><use href="#i-clock"/></svg>مفتوح دلوقتي</span>
        <span class="chip"><svg class="ic"><use href="#i-tag"/></svg>عروض النهارده</span>
      </div>
    </div>

    <div class="sec">
      <div class="sec-head"><h2><svg class="ic"><use href="#i-grid"/></svg>التصنيفات</h2><a>عرض الكل<svg class="ic"><use href="#i-chev"/></svg></a></div>
      <div class="cat-grid">
        <div class="cat"><div class="ci t-green"><svg class="ic"><use href="#i-fork"/></svg></div>مطاعم</div>
        <div class="cat"><div class="ci t-brown"><svg class="ic"><use href="#i-cup"/></svg></div>كافيهات</div>
        <div class="cat"><div class="ci t-blue"><svg class="ic"><use href="#i-steth"/></svg></div>عيادات</div>
        <div class="cat"><div class="ci t-red"><svg class="ic"><use href="#i-pharma"/></svg></div>صيدليات</div>
        <div class="cat"><div class="ci t-purple"><svg class="ic"><use href="#i-cap"/></svg></div>مدرسين</div>
        <div class="cat"><div class="ci t-teal"><svg class="ic"><use href="#i-school"/></svg></div>سناتر</div>
        <div class="cat"><div class="ci t-amber"><svg class="ic"><use href="#i-cart"/></svg></div>سوبر ماركت</div>
        <div class="cat"><div class="ci t-pink"><svg class="ic"><use href="#i-meat"/></svg></div>جزارة</div>
        <div class="cat"><div class="ci t-gray"><svg class="ic"><use href="#i-bus"/></svg></div>مواصلات</div>
        <div class="cat"><div class="ci t-brown"><svg class="ic"><use href="#i-wrench"/></svg></div>حرفيين</div>
        <div class="cat"><div class="ci t-blue"><svg class="ic"><use href="#i-wifi"/></svg></div>خدمات إلكترونية</div>
        <div class="cat"><div class="ci t-gray"><svg class="ic"><use href="#i-mobile"/></svg></div>موبايلات</div>
        <div class="cat"><div class="ci t-green"><svg class="ic"><use href="#i-leaf"/></svg></div>عطارة</div>
        <div class="cat"><div class="ci t-amber"><svg class="ic"><use href="#i-mega"/></svg></div>إعلانات وسوشيال</div>
      </div>
    </div>

    <div class="sec">
      <div class="sec-head"><h2><svg class="ic"><use href="#i-tag"/></svg>عروض وإعلانات</h2><a>كل العروض<svg class="ic"><use href="#i-chev"/></svg></a></div>
      <div class="hscroll">
        <div class="offer">
          <span class="badge"><svg class="ic" style="width:11px;height:11px"><use href="#i-tag"/></svg>خصم ٢٠٪</span>
          <h3>مطعم البركة</h3>
          <p>على كل وجبات الفراخ المشوية طول الأسبوع</p>
          <div class="meta"><span><svg class="ic"><use href="#i-clock"/></svg>حتى ٣٠ نوفمبر</span><span class="cta">اطلب دلوقتي</span></div>
        </div>
        <div class="offer alt">
          <span class="badge"><svg class="ic" style="width:11px;height:11px"><use href="#i-tag"/></svg>عرض الأسبوع</span>
          <h3>سوبر ماركت التوفير</h3>
          <p>خصومات على السلع الأساسية للبيت</p>
          <div class="meta"><span><svg class="ic"><use href="#i-clock"/></svg>لسه ٣ أيام</span><span class="cta">شوف العرض</span></div>
        </div>
        <div class="offer alt2">
          <span class="badge"><svg class="ic" style="width:11px;height:11px"><use href="#i-tag"/></svg>جديد</span>
          <h3>كافيه النيل</h3>
          <p>مشروب مجاني مع كل طلب بعد الضهر</p>
          <div class="meta"><span><svg class="ic"><use href="#i-clock"/></svg>طوال نوفمبر</span><span class="cta">التفاصيل</span></div>
        </div>
      </div>
    </div>

    <div class="sec">
      <div class="sec-head"><h2><svg class="ic"><use href="#i-target"/></svg>الأقرب ليك</h2><a>الخريطة<svg class="ic"><use href="#i-chev"/></svg></a></div>
      <div class="place">
        <div class="thumb t-blue"><svg class="ic"><use href="#i-steth"/></svg></div>
        <div class="info">
          <h3>عيادة د. أحمد سمير <span class="status open">مفتوح</span></h3>
          <div class="sub">باطنة وقلب · <span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٨</span></div>
          <div class="sub" style="margin-top:6px"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٢٥٠ متر</span></div>
        </div>
      </div>
      <div class="place">
        <div class="thumb t-red"><svg class="ic"><use href="#i-pharma"/></svg></div>
        <div class="info">
          <h3>صيدلية الشفاء <span class="status open">مفتوح</span></h3>
          <div class="sub">صيدلية · مناوبة ٢٤ ساعة · <span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٦</span></div>
          <div class="sub" style="margin-top:6px"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٤٠٠ متر</span></div>
        </div>
      </div>
      <div class="place">
        <div class="thumb t-green"><svg class="ic"><use href="#i-fork"/></svg></div>
        <div class="info">
          <h3>مطعم البركة <span class="status closed">يغلق ١١م</span></h3>
          <div class="sub">مشويات وفراخ · <span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٥</span></div>
          <div class="sub" style="margin-top:6px"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٦٥٠ متر</span></div>
        </div>
      </div>
    </div>

    <div class="sec">
      <div class="sec-head"><h2><svg class="ic"><use href="#i-news"/></svg>آخر أخبار المجتمع</h2><a>المجتمع<svg class="ic"><use href="#i-chev"/></svg></a></div>
      <div class="news-card">
        <div class="ni t-green"><svg class="ic"><use href="#i-users"/></svg></div>
        <div><h3>افتتاح وحدة الإسعاف الجديدة بالقرية</h3><p>من صفحة مجتمع تيره على فيسبوك · منذ ساعتين</p></div>
      </div>
    </div>

    <div class="vbanner">
      <div class="vi"><svg class="ic" style="color:var(--amber)"><use href="#i-landmark"/></svg></div>
      <div><h3>اعرف أكتر عن تيره</h3><p>تاريخ القرية، إنجازاتها، وصفحة وفاء لشهدائها</p></div>
    </div>

    <div class="bnav">
      <div class="bi on"><span class="icwrap"><svg class="ic"><use href="#i-home"/></svg></span>الرئيسية</div>
      <div class="bi"><span class="icwrap"><svg class="ic"><use href="#i-pin"/></svg></span>حواليك</div>
      <div class="bi"><span class="icwrap"><svg class="ic"><use href="#i-tag"/></svg></span>العروض</div>
      <div class="bi"><span class="icwrap"><svg class="ic"><use href="#i-users"/></svg></span>المجتمع</div>
      <div class="bi"><span class="icwrap"><svg class="ic"><use href="#i-grid"/></svg></span>المزيد</div>
    </div>
</x-layouts.app>
