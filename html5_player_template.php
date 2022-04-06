
    <div id="video-player" class="html5-video-player" style="display: none;" tabindex="-1">
      <style class="html5-viewport-sheet" disabled="true">
    @-o-viewport { width: device-width; }
    @-moz-viewport { width: device-width; }
    @-ms-viewport { width: device-width; }
    @-webkit-viewport { width: device-width; }
    @viewport { width: device-width; }
  </style>

      <div class="html5-video-fallback html5-stop-propagation" style="display: none;">
    <div class="html5-video-fallback-content">
      The video was not uploaded correctly, as a side effect, you cannot watch this video! Sorry.
    </div>
  </div>

    <div class="html5-video-container">
        <div class="html5-modal-panel html5-stop-propagation hid">
    <div class="html5-modal-panel-clipboard-substitute-content">
      <input type="text" readonly="readonly"></input>
    </div>
    <div class="html5-modal-panel-infobox-content">
    </div>
    <button onclick="return false;" type="button" class="html5-modal-panel-close-button" role="button">
Close
    </button>
    <div class="html5-show-video-info-template hid">
      <table class="html5-video-info-table">
        <tr><th>Video ID:</th><td>__videoId__</td></tr>
        <tr><th>Dimensions:</th><td>__videoWidth__x__videoHeight__</td></tr>
        <tr><th>Volume:</th><td>__volume__%</td></tr>
        <tr><th>Stream Type:</th><td>__streamType__</td></tr>
      </table>
      &nbsp;
      <table class="html5-video-info-table html5-video-element-info-table">
        <tr><th>Decoded Frames</th><th>Dropped Frames</th><th>Parsed Frames</th><th>Presented Frames</th></tr>
        <tr><td>__decodedFrames__</td><td>__droppedFrames__</td><td>__parsedFrames__</td><td>__presentedFrames__</td></tr>
        <tr><th>Video Bytes Decoded</th><th>Audio Bytes Decoded</th><th>Painted Frames</th><th>Paint Delay</th></tr>
        <tr><td>__videoBytesDecoded__</td><td>__audioBytesDecoded__</td><td>__paintedFrames__</td><td>__paintDelay__</td></tr>
      </table>
    </div>
  </div>

        <div class="html5-dialog-holder html5-center-overlay html5-center-transform">
      <div class="captions-translation-dialog html5-popup-dialog html5-stop-propagation hid">
    <div class="html5-popup-dialog-title">
      <h3>Translate...</h3>
      <span class="html5-beta-label">BETA</span>
    </div>
    <select class="captions-translation-select"></select>
    <div class="html5-popup-dialog-buttons">
      <button type="button" class="captions-translation-confirm yt-uix-button yt-uix-button-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">OK </span></button>
      <button type="button" class="captions-translation-cancel yt-uix-button yt-uix-button-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Cancel </span></button>
    </div>
  </div>
  <div class="captions-settings-dialog html5-popup-dialog html5-stop-propagation hid">
    <div class="html5-popup-dialog-title">
      <h3>Caption Settings</h3>
    </div>
    <div class="html5-popup-dialog-body">
      <div class="html5-popup-grouping">
        <form class="html5-popup-side-left">
          <p>Background - Shortcut: b</p>
            <ul class="captions-settings-background-opacity">
    
    
    
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-background-opacity-radio"><input type="radio" name="background-opacity" class="yt-uix-form-input-radio" name="background-opacity" id="captions-settings-background-opacity: 0.0" value="0.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-background-opacity: 0.0" aria-label="background: Transparent">Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-background-opacity-radio"><input type="radio" name="background-opacity" class="yt-uix-form-input-radio" name="background-opacity" id="captions-settings-background-opacity: 0.5" value="0.5"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-background-opacity: 0.5" aria-label="background: Semi-Transparent">Semi-Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-background-opacity-radio"><input type="radio" name="background-opacity" class="yt-uix-form-input-radio" name="background-opacity" id="captions-settings-background-opacity: 1.0" value="1.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-background-opacity: 1.0" aria-label="background: Opaque">Opaque</label>
      </li>
  </ul>

        </form>
        <form class="html5-popup-side-left">
          <p>Text - Shortcut: o</p>
            <ul class="captions-settings-text-opacity">
    
    
    
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-text-opacity-radio"><input type="radio" name="text-opacity" class="yt-uix-form-input-radio" name="text-opacity" id="captions-settings-text-opacity: 0.0" value="0.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-text-opacity: 0.0" aria-label="text: Transparent">Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-text-opacity-radio"><input type="radio" name="text-opacity" class="yt-uix-form-input-radio" name="text-opacity" id="captions-settings-text-opacity: 0.5" value="0.5"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-text-opacity: 0.5" aria-label="text: Semi-Transparent">Semi-Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-text-opacity-radio"><input type="radio" name="text-opacity" class="yt-uix-form-input-radio" name="text-opacity" id="captions-settings-text-opacity: 1.0" value="1.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-text-opacity: 1.0" aria-label="text: Opaque">Opaque</label>
      </li>
  </ul>

        </form>
        <form class="html5-popup-side-left">
          <p>Window - Shortcut: w</p>
            <ul class="captions-settings-window-opacity">
    
    
    
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-window-opacity-radio"><input type="radio" name="window-opacity" class="yt-uix-form-input-radio" name="window-opacity" id="captions-settings-window-opacity: 0.0" value="0.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-window-opacity: 0.0" aria-label="window: Transparent">Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-window-opacity-radio"><input type="radio" name="window-opacity" class="yt-uix-form-input-radio" name="window-opacity" id="captions-settings-window-opacity: 0.5" value="0.5"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-window-opacity: 0.5" aria-label="window: Semi-Transparent">Semi-Transparent</label>
      </li>
      <li>
          <span class="yt-uix-form-input-radio-container captions-settings-window-opacity-radio"><input type="radio" name="window-opacity" class="yt-uix-form-input-radio" name="window-opacity" id="captions-settings-window-opacity: 1.0" value="1.0"><span class="yt-uix-form-input-radio-element"></span></span>

        <label for="captions-settings-window-opacity: 1.0" aria-label="window: Opaque">Opaque</label>
      </li>
  </ul>

        </form>
        <p class="html5-popup-side-right">
          <button type="button" class="captions-settings-font-inc yt-uix-button yt-uix-button-default yt-uix-tooltip" onclick=";return false;" title="Increase font size"  role="button" aria-label="Increase font size"><span class="yt-uix-button-content">+ </span></button>
          <button type="button" class="captions-settings-font-dec yt-uix-button yt-uix-button-default yt-uix-tooltip" onclick=";return false;" title="Decrease font size"  role="button" aria-label="Decrease font size"><span class="yt-uix-button-content">- </span></button>
Shortcut: +/-
        </p>
      </div>
      <div class="html5-popup-grouping">
        <div class="html5-popup-side-left">
          <div class="html5-popup-grouping captions-settings-color-picker-group">
            <p class="html5-popup-side-left">
Foreground
            </p>
            <p class="html5-popup-side-right">
                  <button data-color="#080808" style="background: #080808" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #080808"></button>
    <button data-color="#00f" style="background: #00f" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #00f"></button>
    <button data-color="#0f0" style="background: #0f0" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #0f0"></button>
    <button data-color="#0ff" style="background: #0ff" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #0ff"></button>
    <button data-color="#f00" style="background: #f00" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #f00"></button>
    <button data-color="#f0f" style="background: #f0f" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #f0f"></button>
    <button data-color="#ff0" style="background: #ff0" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #ff0"></button>
    <button data-color="#fff" style="background: #fff" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="color #fff"></button>

            </p>
          </div>
          <div class="html5-popup-grouping captions-settings-color-picker-group">
            <p class="html5-popup-side-left">
Background
            </p>
            <p class="html5-popup-side-right">
                  <button style="background: #080808" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#080808"  role="button" aria-label="background #080808"></button>
    <button style="background: #00f" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#00f"  role="button" aria-label="background #00f"></button>
    <button style="background: #0f0" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#0f0"  role="button" aria-label="background #0f0"></button>
    <button style="background: #0ff" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#0ff"  role="button" aria-label="background #0ff"></button>
    <button style="background: #f00" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#f00"  role="button" aria-label="background #f00"></button>
    <button style="background: #f0f" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#f0f"  role="button" aria-label="background #f0f"></button>
    <button style="background: #ff0" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#ff0"  role="button" aria-label="background #ff0"></button>
    <button style="background: #fff" onclick=";return false;" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty" data-background="#fff"  role="button" aria-label="background #fff"></button>

            </p>
          </div>
          <div class="html5-popup-grouping captions-settings-color-picker-group">
            <p class="html5-popup-side-left">
Window
            </p>
            <p class="html5-popup-side-right">
                  <button style="background: #080808" onclick=";return false;" data-windowColor="#080808" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #080808"></button>
    <button style="background: #00f" onclick=";return false;" data-windowColor="#00f" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #00f"></button>
    <button style="background: #0f0" onclick=";return false;" data-windowColor="#0f0" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #0f0"></button>
    <button style="background: #0ff" onclick=";return false;" data-windowColor="#0ff" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #0ff"></button>
    <button style="background: #f00" onclick=";return false;" data-windowColor="#f00" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #f00"></button>
    <button style="background: #f0f" onclick=";return false;" data-windowColor="#f0f" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #f0f"></button>
    <button style="background: #ff0" onclick=";return false;" data-windowColor="#ff0" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #ff0"></button>
    <button style="background: #fff" onclick=";return false;" data-windowColor="#fff" type="button" class="html5-color-picker-button yt-uix-button yt-uix-button-default yt-uix-button-empty"  role="button" aria-label="windowColor #fff"></button>

            </p>
          </div>
        </div>
        <div class="captions-settings-drop-down-group">
          <div class="html5-popup-grouping captions-settings-char-edge-style-group">
            <p class="html5-popup-side-left">
Character Edge Style
            </p>
            <p class="html5-popup-side-right">
              <span class="yt-uix-form-input-select captions-settings-char-edge-style"><span class="yt-uix-form-input-select-content"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-uix-form-input-select-arrow"><span class="yt-uix-form-input-select-value"></span></span><select class="yt-uix-form-input-select-element captions-settings-char-edge-style-select">  <option value="none">
None
  </option>
  <option value="dropShadow">
Drop Shadow
  </option>
  <option value="raised">
Raised
  </option>
  <option value="depressed">
Depressed
  </option>
  <option value="uniform">
Uniform
  </option>
</select></span>
            </p>
          </div>
          <div class="html5-popup-grouping captions-settings-font-family-group">
            <p class="html5-popup-side-left">
Font Family
            </p>
            <p class="html5-popup-side-right">
              <span class="yt-uix-form-input-select captions-settings-font-family"><span class="yt-uix-form-input-select-content"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="yt-uix-form-input-select-arrow"><span class="yt-uix-form-input-select-value"></span></span><select class="yt-uix-form-input-select-element captions-settings-font-family-select">  <option value="monoSerif">
Monospaced Serif
  </option>
  <option value="propSerif">
Proportional Serif
  </option>
  <option value="monoSans">
Monospaced Sans-Serif
  </option>
  <option value="propSans">
Proportional Sans-Serif
  </option>
  <option value="casual">
Casual
  </option>
  <option value="cursive">
Cursive
  </option>
  <option value="smallCaps">
Small Capitals
  </option>
</select></span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="html5-popup-grouping html5-popup-dialog-buttons captions-settings-dialog-buttons">
      <p class="html5-popup-side-left">
      </p>
      <button type="button" class="captions-settings-cancel yt-uix-button yt-uix-button-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Reset </span></button>
      <button type="button" class="captions-settings-confirm yt-uix-button yt-uix-button-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Done </span></button>
    </div>
  </div>

      <div class="threed-html5-warning-dialog html5-popup-dialog html5-stop-propagation hid">
    <div class="html5-popup-dialog-title">
      <h3>No HTML5 3D hardware detected</h3>
    </div>
    <div class="html5-popup-dialog-body">
      <p>
Get <a href="//support.google.com/youtube/bin/answer.py?answer=1229982&amp;hl=en-US">help setting up HTML5 3D</a>, or change 3D viewing modes.
      </p>
    </div>
    <div class="html5-popup-dialog-buttons">
      <button href="#" type="button" class="html5-threed-dialog-change-mode-button yt-uix-button yt-uix-button-default" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;"  role="button"><span class="yt-uix-button-content">Change 3D viewing mode </span></button>
      <button type="button" class="threed-html5-warning-close yt-uix-button yt-uix-button-default" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Close </span></button>
    </div>
  </div>

  </div>

        <div class="html5-video-content"></div>

        <div class="video-annotations">
    <div class="annotation-close-button-container hid">
      <svg class="annotation-close-button" width="100%" height="100%"
          viewBox="0 0 21 21">
        <circle cx="10" cy="10" r="8"/>
        <path d="M 7,7 L 13,13"/>
        <path d="M 7,13 L 13,7"/>
      </svg>
    </div>
    <svg class="countdowntimer hid" width="60" height="60">
      <g>
        <circle cx="30" cy="30" r="15" class="countdowntimer-background-circle" />
        <path d="M30,30 z" class="countdowntimer-diminishing-pieslice" />
        <circle cx="30" cy="30" r="4" class="countdowntimer-middle-dot" />
      </g>
    </svg>
  </div>

        <div class="video-ads">
    <div class="video-ad-status-bar">
      <div class="video-ad-label">Advertisement</div>
      <div class="video-ad-time-left"></div>
        <div class="html5-progress-bar html5-stop-propagation">
    <div class="html5-ad-progress-list html5-progress-list html5-progress-item"></div>
  </div>

    </div>
    <div class="ad-container"></div>
  </div>

        <div class="html5-video-loader html5-center-overlay hid"></div>

        <div class="html5-info-bar html5-stop-propagation">
    <div class="html5-title" tabindex="1"></div>
    <div class="html5-info-bar-buttons">
      <button type="button" class="html5-more-info-button html5-control-right html5-control-sep-left yt-uix-button yt-uix-button-player" onclick=";return false;"  role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span><span class="yt-uix-button-content">More info </span></button>

      <button type="button" class="html5-share-button html5-text-button html5-control-right html5-control-sep-left hid yt-uix-button yt-uix-button-player" onclick=";return false;"  role="button"><span class="yt-uix-button-content">Share </span></button>


      <div class="html5-like-dislike-buttons hid">
        <button type="button" class="html5-dislike-button html5-control-right yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" onclick=";return false;" title="Dislike"  role="button" aria-label="Dislike"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Dislike"><span class="yt-valign-trick"></span></span></button>
        <button type="button" class="html5-like-button html5-control-right html5-control-sep-left yt-uix-button yt-uix-button-player" onclick=";return false;"  role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span><span class="yt-uix-button-content">Like </span></button>
      </div>
      <div class="html5-info-bar-logo hid">YouTube</div>
    </div>
      <div class="html5-info-panel">
    <div class="html5-info-panel-loading-icon">
      <div class="html5-info-panel-loader hid"></div>
    </div>

    <div class="html5-info-panel-content hid">
      <div class="html5-author">
        <div class="html5-author-img">
          <span class="video-thumb ux-thumb yt-thumb-default-138 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Thumbnail" width="138" ><span class="vertical-align"></span></span></span></span>
        </div>
        <div class="html5-author-info">
          <div class="html5-author-name"></div>
          <div class="html5-subscriber-count"></div>
        </div>
      </div>

      <span class="enable-fancy-subscribe-button">
        <span class="yt-uix-button-context-light yt-uix-button-subscription-container"><button href="" onclick=";return false;" title="" type="button" class="yt-subscription-button yt-subscription-button-js-default html5-subscribe-button yt-uix-button-dark  yt-uix-button yt-uix-button-subscription yt-uix-tooltip" data-subscription-feature="" data-sessionlink="ei=COKlnt_h97ICFakRIQodBj3VBQ%3D%3D" data-subscription-value="id" data-subscription-type="" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-subscribe" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span><span class="yt-uix-button-content">  <span class="subscribe-label">Subscribe</span>
  <span class="subscribed-label">Subscribed</span>
  <span class="unsubscribe-label">Unsubscribe</span>
 </span></button><span class="yt-subscription-button-disabled-mask"></span></span>
      </span>

      <div class="html5-video-info">
        <div class="html5-view-count"></div>
          <div class="video-extras-sparkbars">
    <div class="video-extras-sparkbar-likes" style="width: 0%"></div>
    <div class="video-extras-sparkbar-dislikes" style="width: 0%"></div>
  </div>
  <span class="video-extras-likes-dislikes">
    
  </span>

      </div>

      <p class="html5-description-text"></p>
    </div>
  </div>

  </div>

        <img class="html5-watermark html5-stop-propagation html5-scalable-icon hid" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="watermark">

          <svg class="html5-big-play-button html5-center-overlay html5-scalable-icon">
      <path fill="#380308" d="M89.2,34.4c-0.064,2.649-0.265,5.434-0.6,8.35c-0.467,3.733-1.05,6.867-1.75,9.4
c-1.4,5.133-4.4,8.184-9,9.149c-3.533,0.733-7.6,1.217-12.2,1.45c-4.033,0.233-9.867,0.35-17.5,0.35H40.1
c-10.567,0-20.133-0.6-28.7-1.8c-4.467-0.667-7.467-3.716-9-9.149c-0.7-2.533-1.267-5.667-1.7-9.4
c-0.361-2.916-0.578-5.699-0.65-8.35c0.122,2.316,0.338,4.733,0.65,7.25c0.433,3.732,1,6.866,1.7,9.399
c1.533,5.435,4.533,8.483,9,9.15c8.567,1.2,18.133,1.8,28.7,1.8h8.05c7.633,0,13.467-0.117,17.5-0.35
c4.6-0.233,8.667-0.718,12.2-1.45c4.6-0.967,7.6-4.018,9-9.15c0.7-2.533,1.283-5.667,1.75-9.399
C88.89,39.134,89.089,36.717,89.2,34.4z"/>
      <path class="html5-overlay-button-background" d="M86.85,10.9c0.7,2.532,1.283,5.684,1.75,9.449c0.433,3.733,0.65,7.268,0.65,10.601V31
c0,3.333-0.217,6.883-0.65,10.65c-0.467,3.732-1.05,6.866-1.75,9.399c-1.4,5.133-4.4,8.185-9,9.15
c-3.533,0.732-7.6,1.216-12.2,1.45C61.617,61.883,55.783,62,48.15,62H40.1c-10.567,0-20.133-0.6-28.7-1.8
c-4.467-0.667-7.467-3.717-9-9.15c-0.7-2.533-1.267-5.667-1.7-9.399C0.233,37.883,0,34.333,0,31v-0.05
c0-3.333,0.233-6.867,0.7-10.601c0.433-3.767,1-6.917,1.7-9.449c1.4-5.134,4.4-8.184,9-9.15c3.5-0.7,7.567-1.183,12.2-1.45
C27.533,0.1,33.367,0,41.1,0h8.05c10.8,0,20.367,0.583,28.7,1.75C82.317,2.417,85.317,5.467,86.85,10.9z"/>
      <g viewBox="-15.025 -15.151 30.05 30.303" transform="matrix(1 0 0 -1 47.375 29.75)">
        <path fill="#FCFCFC" d="M10.275,4c3.167-1.866,4.75-3.199,4.75-4c0-0.8-1.583-2.149-4.75-4.05
                                c-1.367-0.8-4.517-2.482-9.45-5.05c-4.5-2.333-7.233-3.733-8.2-4.2c-2.533-1.232-4.066-1.85-4.6-1.85
                                c-1.233-0.033-2.083,0.399-2.55,1.3c-0.333,0.667-0.5,1.75-0.5,3.25v21.2c0,1.5,0.167,2.583,0.5,3.25
                                c0.467,0.899,1.317,1.333,2.55,1.3c0.534,0,2.067-0.617,4.6-1.85c0.967-0.468,3.7-1.867,8.2-4.2C5.758,6.533,8.908,4.833,10.275,4
                                z"/>
      </g>
      <defs>
        <linearGradient id="html5-big-play-button-red" gradientUnits="userSpaceOnUse" x1="44.625" y1="0" x2="44.625" y2="62">
          <stop  offset="0" style="stop-color:#CD332D"/>
          <stop  offset="0.8549" style="stop-color:#6E0610"/>
        </linearGradient>
        <linearGradient id="html5-big-play-button-black" gradientUnits="userSpaceOnUse" x1="44.625" y1="0" x2="44.625" y2="62">
          <stop  offset="0" style="stop-color:#3E3D3D"/>
          <stop  offset="0.7451" style="stop-color:#131313"/>
        </linearGradient>
      </defs>
    </svg>

        <div class="html5-endscreen">
    <div class="html5-endscreen-content"></div>

    <div class="videowall-still-content-template">
      <!--
        <span class="videowall-still-featured-label">Featured video</span>
        <span class="videowall-info">__info__</span>
      -->
    </div>
    <div class="videowall-info-template">
      <!--
        <span class="videowall-info-title">__title__</span>
        <span class="videowall-info-author">__author__</span>
        <span class="videowall-info-duration">__duration__</span>
        <span class="videowall-info-view-count">__view_count__</span>
      -->
    </div>
  </div>

        <ul class="html5-context-menu yt-uix-button-menu hid">
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-copy-video-url">Copy video URL</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-copy-video-url-at-current-time">Copy video URL at current time</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-copy-embed-html">Copy embed HTML</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-report-playback-issue">Report playback issue</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-copy-debug-info">Copy debug info</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-stop-download">Stop download</span>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-pop-out">Pop out</span>
    </li>
    <li>
      <a class="yt-uix-button-menu-item" target="_blank" href="/my_speed">Take speed test</a>
    </li>
    <li>
      <span class="yt-uix-button-menu-item html5-context-menu-show-video-info">Show video info</span>
    </li>
    <li>
      <a class="yt-uix-button-menu-item" target="_blank" href="/html5">About HTML5</a>
    </li>
  </ul>

        <div class="html5-ypc-module">
    <div class="html5-ypc-overlay html5-stop-propagation">
      <div class="html5-ypc-message"></div>
      <button class="html5-ypc-purchase"></button>
      <button class="html5-module-close html5-stop-propagation"></button>
    </div>
    <button class="html5-module-recall html5-stop-propagation"></button>
  </div>

      <div class="html5-fresca-module html5-stop-propagation"><div class="html5-fresca-band-slate"><hgroup class="html5-fresca-message"></hgroup><span class="html5-fresca-countdown"></span></div></div><div class="html5-fresca-template"><!--<h2 class="html5-fresca-heading">__heading__</h2><h3 class="html5-fresca-subheading">__subheading__</h3><h4 class="html5-fresca-long-text">__long_text__</h4>--></div>
    </div>
    <div class="html5-video-controls">
        <div class="html5-progress-bar html5-stop-propagation">
    <div class="html5-progress-bar-inner">
      <div class="html5-scrubber-track">
        <div class="html5-scrubber-button html5-draggable html5-progress-item"></div>
      </div>
      <div class="html5-progress-list html5-progress-item">
        <div class="html5-play-progress html5-progress-section"></div>
        <div class="html5-load-progress html5-progress-section"></div>
      </div>
      <div class="html5-ad-progress-list html5-progress-list html5-progress-item"></div>
      <div class="html5-progress-screenreader" aria-live="assertive"></div>
    </div>
  </div>
  <div class="html5-progress-tooltip hid">
    <img class="html5-progress-tooltip-thumbnail" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
    <span class="html5-progress-tooltip-timestamp"></span>
    <div class="html5-progress-tooltip-arrow"></div>
  </div>

        <div class="html5-playlist html5-stop-propagation">
    <div class="html5-playlist-info">
      <div class="html5-playlist-message"></div>
      <div class="html5-playlist-title"></div>
    </div>
    <div class="html5-playlist-pager">
      <button type="button" class="html5-playlist-pager-button html5-playlist-pager-button-left yt-uix-button yt-uix-button-player yt-uix-button-empty" onclick=";return false;"  role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button>
      <button type="button" class="html5-playlist-pager-button html5-playlist-pager-button-right yt-uix-button yt-uix-button-player yt-uix-button-empty" onclick=";return false;"  role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-valign-trick"></span></span></button>
    </div>
    <div class="html5-playlist-strip">
      <img class="html5-playlist-thumbnail" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
    </div>
  </div>

        <div class="html5-storyboard">
    <div class="html5-storyboard-filmstrip">
      <img class="html5-storyboard-thumbnail" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
    </div>
    <div class="html5-storyboard-lens">
      <img class="html5-storyboard-lens-thumbnail" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif">
      <span class="html5-storyboard-lens-timestamp"></span>
    </div>
  </div>

        <div class="html5-player-chrome html5-stop-propagation">
    <button data-title-default="Play" title="Play" class="html5-play-button html5-control html5-control-sep yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" data-title-replay="Replay" onclick=";return false;" data-title-pause="Pause" type="button" data-title-stop="Stop live playback" tabindex="3"  role="button" aria-label="Play"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Play"><span class="yt-valign-trick"></span></span></button>

    <div class="yt-uix-button yt-uix-button-player html5-volume-control html5-control html5-control-sep">
    <button data-title-default="Mute" title="Mute" data-title-alt="Unmute" onclick=";return false;" type="button" class="html5-volume-button yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="4"  role="button" aria-label="Mute toggle"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Mute"><span class="yt-valign-trick"></span></span></button>

      <div class="html5-volume-panel" role="slider" tabindex="5" aria-valuemin="0" aria-valuemax="100">
        <div class="html5-volume-slider html5-draggable">
          <div class="html5-volume-slider-foreground"></div>
        </div>
      </div>
    </div>
    <div class="progress-text html5-control"><span class="current-time html5-current-time">0:00</span><span class="html5-time-separator"> / </span><span class="duration-time html5-duration-time">0:00</span><span class="html5-live-indicator hid">Live</span></div>


    <button data-title-default="Full screen" data-value="fullscreen" title="Full screen" data-title-alt="Exit full screen" onclick=";return false;" type="button" class="html5-fullscreen-button html5-control-right yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="15"  role="button" aria-label="Full screen"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Full screen"><span class="yt-valign-trick"></span></span></button>

    <button onclick=";return false;" title="Large player" type="button" class="html5-large-player-button html5-control-right hid yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="14"  role="button" aria-label="Large player"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Large player"><span class="yt-valign-trick"></span></span></button>

    <button onclick=";return false;" title="Small player" type="button" class="html5-small-player-button html5-control-right hid yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="13"  role="button" aria-label="Small player"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Small player"><span class="yt-valign-trick"></span></span></button>

    <button onclick=";return false;" title="Watch on SubRocks" type="button" class="html5-watch-on-youtube-button html5-control-right html5-control-sep yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="12"  role="button" aria-label="Watch on SubRocks"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch on SubRocks"><span class="yt-valign-trick"></span></span></button>

    <button onclick=";return false;" title="Watch later" type="button" class="html5-watch-later-button html5-control-right html5-control-sep yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="11"  role="button" aria-label="Watch later"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Watch later"><span class="yt-valign-trick"></span></span></button>

    <button onclick=";return false;" title="Settings" type="button" class="html5-quality-button html5-control-right html5-control-sep yt-uix-button-reverse yt-uix-button-center-menu flip hid yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="10"  role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="" aria-label="Settings"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Settings"><span class="yt-valign-trick"></span></span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-player" style="display: none;">  <div class="html5-settings-popup-menu html5-popup-menu list-style-menu">
    <ul class="html5-quality-popup-menu">
      <li class="html5-popup-menu-header">
Quality
      </li>
      <li class="yt-uix-button-menu-item" data-value="highres">
        <span>Original <sup>HD</sup></span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="hd1080">
        <span class="yt-uix-button-menu-close">1080p <sup>HD</sup></span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="hd720">
        <span class="yt-uix-button-menu-close">720p <sup>HD</sup></span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="large">
        <span class="yt-uix-button-menu-close">480p</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="medium">
        <span class="yt-uix-button-menu-close">360p</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="small">
        <span class="yt-uix-button-menu-close">240p</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="auto">
        <span class="yt-uix-button-menu-close">Auto</span>
      </li>
    </ul>
    <ul class="html5-speed-popup-menu hid">
      <li class="html5-popup-menu-header">
Speed
      </li>
      <li class="yt-uix-button-menu-item" data-value="2.0">
        <span class="yt-uix-button-menu-close">2.0x</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="1.5">
        <span class="yt-uix-button-menu-close">1.5x</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="1.0">
        <span class="yt-uix-button-menu-close">Normal</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="0.5">
        <span class="yt-uix-button-menu-close">0.5x</span>
      </li>
      <li class="yt-uix-button-menu-item" data-value="0.25">
        <span class="yt-uix-button-menu-close">0.25x</span>
      </li>
    </ul>
  </div>
</div></button>

    <button onclick=";return false;" title="Captions" type="button" class="html5-captions-button html5-module-button html5-control-right yt-uix-button-reverse flip yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="9"  role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="" aria-label="Captions toggle"><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-player" style="display: none;">  <ul class="html5-captions-popup-menu html5-popup-menu">
    <li>
      <div class="html5-captions-actions html5-popup-menu-item-group">
        <ul>
          <li class="yt-uix-button-menu-item" data-action="settings">
Settings...
          </li>
        </ul>
      </div>
      <div class="captions-transforms html5-captions-actions html5-popup-menu-item-group">
        <ul>
          <li class="yt-uix-button-menu-item" data-action="translate">
Translate Captions
            <span class="html5-beta-label">BETA</span>
          </li>
        </ul>
      </div>
      <form class="html5-captions-tracks html5-popup-menu-item-group">
        <ul></ul>
      </form>
      <div class="html5-captions-off html5-popup-menu-item-group">
        <ul>
          <li class="yt-uix-button-menu-item" data-action="captions-off">
Turn Captions Off
          </li>
        </ul>
      </div>
    </li>
  </ul>
</div></button>

    <button onclick=";return false;" title="Annotations" type="button" class="html5-annotations-button html5-control-right hid yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="8"  role="button" aria-label="Annotations"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Annotations"><span class="yt-valign-trick"></span></span></button>

    <button type="button" class="html5-text-button html5-threed-button html5-control-right yt-uix-button-reverse flip hid yt-uix-button yt-uix-button-player" onclick=";return false;" tabindex="7"  role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant="" aria-label="3D"><span class="yt-uix-button-content">3D </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt=""><div class=" yt-uix-button-menu yt-uix-button-menu-player" style="display: none;">  <ul class="html5-threed-popup-menu html5-popup-menu">
    <li class="yt-uix-button-menu-item">
      <a class="html5-threed-popup-menu-change-mode-link">Change 3D viewing mode...</a>
    </li>
    <li class="yt-uix-button-menu-item html5-threed-conversion-on hid">
Turn on converted 3D
    </li>
    <li class="yt-uix-button-menu-item html5-threed-conversion-off hid">
Turn off converted 3D
    </li>
  </ul>
</div></button>

    <button onclick=";return false;" title="Playlist" type="button" class="html5-playlist-button html5-control-right hid yt-uix-button yt-uix-button-player yt-uix-tooltip yt-uix-button-empty" tabindex="6"  role="button" aria-label="Playlist"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-html5" src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" alt="Playlist"><span class="yt-valign-trick"></span></span></button>

  </div>

    </div>
      <div id="html5-player-messages" class="hid">
    <div id="HTML5_DEFAULT_FALLBACK">This video is currently unavailable.</div>
    <div id="HTML5_NO_AVAILABLE_FORMATS_FALLBACK">Your browser does not currently recognize any of the video formats available.<br><a href="/html5">Click here to visit our frequently asked questions about HTML5 video.</a></div>
    <div id="FLASH_FALLBACK"><div class="yt-alert yt-alert-default yt-alert-error  yt-alert-player">  <div class="yt-alert-icon">
    <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            The Adobe Flash Player is required for video playback. <br> <a href="http://get.adobe.com/flashplayer/">Get the latest Flash Player</a>
    </div>
</div></div></div>
    <div id="DEVICE_FALLBACK"><div class="yt-alert yt-alert-default yt-alert-error  yt-alert-player">  <div class="yt-alert-icon">
    <img src="//s.ytimg.com/yt/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
  </div>
<div class="yt-alert-buttons"></div><div class="yt-alert-content" role="alert">    <span class="yt-alert-vertical-trick"></span>
    <div class="yt-alert-message">
            Sorry, this video is not available on this device.
    </div>
</div></div></div>

    <div id="HTML5_SPEED_NORMAL">Normal</div>
    <div id="HTML5_QUALITY_SETTING">quality</div>
    <div id="HTML5_SPEED_SETTING">speed</div>
    <div id="HTML5_VOLUME_SETTING">volume</div>
    <div id="HTML5_VOLUME_MUTED">muted</div>
    <div id="HTML5_VOLUME_MUTE">mute</div>
    <div id="HTML5_VOLUME_UNMUTE">unmute</div>
    <div id="HTML5_CONTROL_TOGGLE">toggle</div>

    <div id="HTML5_SUBS_TRANSCRIBED">transcribed</div>
    <div id="VISIT_ADVERTISERS_SITE">Visit advertiser's site</div>
    <div id="FRESCA_STARTING_SOON_MESSAGE">Starting soon...</div>
    <div id="FRESCA_COMPLETE_MESSAGE">Thanks for watching!</div>
    <div id="FRESCA_STAND_BY_MESSAGE">Please stand by.</div>
  </div>

  </div>

