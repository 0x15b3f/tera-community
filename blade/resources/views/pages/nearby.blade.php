<x-layouts.app title="حواليك">
    <x-partials.ihead title="حواليك في تيره" icon="search" />

    <div class="mapwrap">
      <svg class="roads" viewBox="0 0 362 430" preserveAspectRatio="none">
        <rect width="362" height="430" fill="#E9F0E6"/>
        <path d="M0 110 H362" stroke="#fff" stroke-width="14"/>
        <path d="M0 250 H362" stroke="#fff" stroke-width="18"/>
        <path d="M0 360 H362" stroke="#fff" stroke-width="10"/>
        <path d="M90 0 V430" stroke="#fff" stroke-width="12"/>
        <path d="M220 0 V430" stroke="#fff" stroke-width="16"/>
        <path d="M310 0 V430" stroke="#fff" stroke-width="9"/>
        <path d="M0 110 H362 M0 250 H362 M0 360 H362 M90 0 V430 M220 0 V430 M310 0 V430" stroke="#D8E2D2" stroke-width="1.5" fill="none"/>
        <rect x="104" y="126" width="100" height="106" fill="#DFEAD8" rx="6"/>
        <rect x="236" y="266" width="60" height="80" fill="#DFEAD8" rx="6"/>
        <rect x="12" y="266" width="62" height="76" fill="#E3EDDB" rx="6"/>
      </svg>
      <div class="me" style="top:47%;right:39%"></div>
      <div class="pinm" style="top:33%;right:26%"><div class="pb" style="background:#2C6BA8"><svg class="ic"><use href="#i-steth"/></svg></div></div>
      <div class="pinm" style="top:55%;right:60%"><div class="pb" style="background:#D64545"><svg class="ic"><use href="#i-pharma"/></svg></div></div>
      <div class="pinm" style="top:74%;right:30%"><div class="pb" style="background:#17835B"><svg class="ic"><use href="#i-fork"/></svg></div></div>
      <div class="pinm" style="top:22%;right:72%"><div class="pb" style="background:#8A6238"><svg class="ic"><use href="#i-cup"/></svg></div></div>
      <div class="mapsearch"><svg class="ic"><use href="#i-search"/></svg>ابحث جوّه المنطقة دي…</div>
      <div class="locate-btn"><svg class="ic"><use href="#i-target"/></svg>استخدم موقعي الحالي</div>
    </div>

    <div class="sheet">
      <div class="grab"></div>
      <h2>الأقرب لموقعك دلوقتي</h2>
      <div class="place" style="border:none;padding:8px 2px;margin:0">
        <div class="thumb t-blue" style="width:48px;height:48px;border-radius:13px"><svg class="ic" style="width:22px;height:22px"><use href="#i-steth"/></svg></div>
        <div class="info">
          <h3 style="font-size:13.5px">عيادة د. أحمد سمير</h3>
          <div class="sub"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٢٥٠ م</span><span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٨</span><span class="status open">مفتوح</span></div>
        </div>
        <span class="abtn solid" style="align-self:center"><svg class="ic"><use href="#i-phone"/></svg></span>
      </div>
      <div class="place" style="border:none;padding:8px 2px;margin:0">
        <div class="thumb t-red" style="width:48px;height:48px;border-radius:13px"><svg class="ic" style="width:22px;height:22px"><use href="#i-pharma"/></svg></div>
        <div class="info">
          <h3 style="font-size:13.5px">صيدلية الشفاء</h3>
          <div class="sub"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٤٠٠ م</span><span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٦</span><span class="status open">مناوبة</span></div>
        </div>
        <span class="abtn solid" style="align-self:center"><svg class="ic"><use href="#i-phone"/></svg></span>
      </div>
      <div class="place" style="border:none;padding:8px 2px;margin:0">
        <div class="thumb t-green" style="width:48px;height:48px;border-radius:13px"><svg class="ic" style="width:22px;height:22px"><use href="#i-fork"/></svg></div>
        <div class="info">
          <h3 style="font-size:13.5px">مطعم البركة</h3>
          <div class="sub"><span class="dist"><svg class="ic"><use href="#i-pin"/></svg>٦٥٠ م</span><span class="rate"><svg class="ic f"><use href="#i-star"/></svg>٤.٥</span></div>
        </div>
        <span class="abtn solid" style="align-self:center"><svg class="ic"><use href="#i-phone"/></svg></span>
      </div>
    </div>
</x-layouts.app>
