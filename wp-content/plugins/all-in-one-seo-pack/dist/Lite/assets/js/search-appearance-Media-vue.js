(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["search-appearance-Media-vue","search-appearance-lite-image-seo-Activate-vue","search-appearance-lite-image-seo-Blur-vue","search-appearance-lite-image-seo-ImageSeo-vue","search-appearance-lite-image-seo-Update-vue","search-appearance-partials-Advanced-vue","search-appearance-partials-Schema-vue","search-appearance-partials-TitleDescription-vue","search-appearance-partials-lite-CustomFields-vue","search-appearance-partials-lite-Schema-vue"],{"0844":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-advanced"},[s("core-settings-row",{attrs:{name:t.strings.robotsSetting},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-robots-meta",{attrs:{options:t.options.advanced.robotsMeta,mainOptions:t.options}})]},proxy:!0}])}),t.showBulk?s("core-settings-row",{attrs:{name:t.strings.bulkEditing,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:t.object.name+"BulkEditing",options:[{label:t.$constants.GLOBAL_STRINGS.disabled,value:"disabled"},{label:t.$constants.GLOBAL_STRINGS.enabled,value:"enabled"},{label:t.strings.readOnly,value:"read-only"}]},model:{value:t.options.advanced.bulkEditing,callback:function(e){t.$set(t.options.advanced,"bulkEditing",e)},expression:"options.advanced.bulkEditing"}})]},proxy:!0}],null,!1,3216224115)}):t._e(),t.noMetaBox||t.isUnlicensed&&"taxonomies"===t.type?t._e():s("core-settings-row",{attrs:{name:t.strings.otherOptions},scopedSlots:t._u([{key:"content",fn:function(){return[s("div",{staticClass:"other-options"},[s("base-toggle",{model:{value:t.options.advanced.showMetaBox,callback:function(e){t.$set(t.options.advanced,"showMetaBox",e)},expression:"options.advanced.showMetaBox"}},[t._v(" "+t._s(t.showMetaBox)+" ")])],1)]},proxy:!0}],null,!1,430458522)}),t.mainOptions.searchAppearance.advanced.useKeywords&&t.includeKeywords?s("core-settings-row",{attrs:{name:t.strings.keywords,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-select",{attrs:{multiple:"",taggable:"",options:t.getJsonValue(t.options.advanced.keywords)||[],value:t.getJsonValue(t.options.advanced.keywords)||[],"tag-placeholder":t.strings.tagPlaceholder},on:{input:function(e){return t.options.advanced.keywords=t.setJsonValue(e)}}})]},proxy:!0}],null,!1,4182382651)}):t._e()],1)},i=[],a=s("5530"),o=s("2f62"),r=s("9c0e"),c={mixins:[r["f"],r["h"]],props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean,noMetaBox:Boolean,includeKeywords:Boolean},data:function(){return{titleCount:0,descriptionCount:0,strings:{robotsSetting:this.$t.__("Robots Meta Settings",this.$td),bulkEditing:this.$t.__("Bulk Editing",this.$td),readOnly:this.$t.__("Read Only",this.$td),otherOptions:this.$t.__("Other Options",this.$td),showDateInGooglePreview:this.$t.__("Show Date in Google Preview",this.$td),keywords:this.$t.__("Keywords",this.$td)}}},computed:Object(a["a"])(Object(a["a"])(Object(a["a"])({},Object(o["e"])({mainOptions:"options"})),Object(o["c"])(["isUnlicensed"])),{},{title:function(){return this.$t.sprintf(this.$t.__("%1$s Title",this.$td),this.object.singular)},showPostThumbnailInSearch:function(){return this.$t.sprintf(this.$t.__("Show %1$s Thumbnail in Google Custom Search",this.$td),this.object.singular)},showMetaBox:function(){return this.$t.sprintf(this.$t.__("Show %1$s Meta Box",this.$td),"AIOSEO")}})},l=c,u=(s("3d63"),s("2877")),d=Object(u["a"])(l,n,i,!1,null,null,null);e["default"]=d.exports},"0ee8":function(t,e,s){},"164d":function(t,e,s){},"1c05":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div")},i=[],a=s("2877"),o={},r=Object(a["a"])(o,n,i,!1,null,null,null);e["default"]=r.exports},"2b0d":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-search-appearance-content-types"},[s("core-card",{attrs:{slug:t.postType.name+"SA"},scopedSlots:t._u([{key:"header",fn:function(){return[s("div",{staticClass:"icon dashicons",class:""+(t.postType.icon||"dashicons-admin-post")}),s("div",{domProps:{innerHTML:t._s(t.postType.label)}})]},proxy:!0},{key:"before-tabs",fn:function(){return[s("core-settings-row",{attrs:{name:t.strings.redirectAttachmentUrls,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:"redirectAttachmentUrls",options:[{label:t.$constants.GLOBAL_STRINGS.disabled,value:"disabled",activeClass:"dark"},{label:t.strings.attachment,value:"attachment"},{label:t.strings.attachmentParent,value:"attachment_parent"}]},model:{value:t.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls,callback:function(e){t.$set(t.dynamicOptions.searchAppearance.postTypes.attachment,"redirectAttachmentUrls",e)},expression:"dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls"}}),s("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.attachmentUrlsDescription)+" ")])]},proxy:!0}])})]},proxy:!0},"disabled"===t.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls?{key:"tabs",fn:function(){return[s("core-main-tabs",{attrs:{tabs:t.tabs,showSaveButton:!1,active:t.settings.internalTabs[t.postType.name+"SA"],internal:""},on:{changed:function(e){return t.processChangeTab(t.postType.name,e)}}})]},proxy:!0}:null],null,!0)},["disabled"===t.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls?s("transition",{attrs:{name:"route-fade",mode:"out-in"}},[s(t.settings.internalTabs[t.postType.name+"SA"],{tag:"component",attrs:{object:t.postType,separator:t.options.searchAppearance.global.separator,options:t.dynamicOptions.searchAppearance.postTypes[t.postType.name],type:"postTypes"}})],1):t._e()],1),s("core-card",{attrs:{slug:"imageSeo","header-text":t.strings.imageSeo}},[t.shouldShowMain?s("image-seo"):t._e(),t.shouldShowActivate?s("activate"):t._e(),t.shouldShowUpdate?s("update"):t._e(),t.shouldShowLite?s("lite"):t._e()],1)],1)},i=[],a=s("5530"),o=(s("4de4"),s("b0c0"),s("2f62")),r=s("e64f"),c=s("0844"),l=s("9e7b"),u=s("8031"),d=s("5be7"),p=s("587e"),h=s("1c05"),g=s("9c0e"),m={mixins:[g["a"]],components:{Activate:r["default"],Advanced:c["default"],CustomFields:l["default"],ImageSeo:u["default"],Lite:u["default"],Schema:d["default"],TitleDescription:p["default"],Update:h["default"]},data:function(){return{addonSlug:"aioseo-image-seo",internalDebounce:!1,strings:{redirectAttachmentUrls:this.$t.__("Redirect Attachment URLs",this.$td),attachment:this.$t.__("Attachment",this.$td),attachmentParent:this.$t.__("Attachment Parent",this.$td),attachmentUrlsDescription:this.$t.__("We recommended redirecting attachment URL's back to the attachment since the default WordPress attachment pages have little SEO value.",this.$td),imageSeo:this.$t.__("Image SEO",this.$td)},tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"Schema",name:this.$t.__("Schema Markup",this.$td),access:"aioseo_search_appearance_settings",pro:!0},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:Object(a["a"])(Object(a["a"])({},Object(o["e"])(["options","dynamicOptions","settings"])),{},{postType:function(){return this.$aioseo.postData.postTypes.filter((function(t){return"attachment"===t.name}))[0]}}),methods:Object(a["a"])(Object(a["a"])({},Object(o["b"])(["changeTab"])),{},{processChangeTab:function(t,e){var s=this;this.internalDebounce||(this.internalDebounce=!0,this.changeTab({slug:"".concat(t,"SA"),value:e}),setTimeout((function(){s.internalDebounce=!1}),50))}})},_=m,b=(s("6d2e"),s("2877")),f=Object(b["a"])(_,n,i,!1,null,null,null);e["default"]=f.exports},"3d63":function(t,e,s){"use strict";s("7a06")},"4edb":function(t,e,s){"use strict";s("164d")},"587e":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-title-description"},[s("core-settings-row",{attrs:{name:t.strings.showInSearchResults,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("base-radio-toggle",{attrs:{name:t.object.name+"ShowInSearch",options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]},model:{value:t.options.show,callback:function(e){t.$set(t.options,"show",e)},expression:"options.show"}}):t._e(),t.edit?t._e():s("base-radio-toggle",{attrs:{value:!0,name:t.object.name+"ShowInSearch",options:[{label:t.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.yes,value:!0}]}}),s("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.noIndexDescription)+" ")])]},proxy:!0}])}),t.edit&&t.options.show?s("core-settings-row",{attrs:{name:t.$constants.GLOBAL_STRINGS.preview},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-google-search-preview",{attrs:{title:t.options.title,separator:t.separator,description:t.options.metaDescription}})]},proxy:!0}],null,!1,3395425131)}):t._e(),t.options.show?s("core-settings-row",{attrs:{name:t.title},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","tags-context":t.object.name+"Title","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"title")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddTitle)+" ")]},proxy:!0}],null,!1,3106947238),model:{value:t.options.title,callback:function(e){t.$set(t.options,"title",e)},expression:"options.title"}}):t._e(),t.edit?t._e():s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","tags-context":t.object.name+"Title","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"title")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddTitle)+" ")]},proxy:!0}],null,!1,3106947238)})]},proxy:!0}],null,!1,198146199)}):t._e(),t.options.show?s("core-settings-row",{attrs:{name:t.strings.metaDescription},scopedSlots:t._u([{key:"content",fn:function(){return[t.edit?s("core-html-tags-editor",{attrs:{"line-numbers":!1,description:"","tags-context":t.object.name+"Description","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"description")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddDescription)+" ")]},proxy:!0}],null,!1,1726597184),model:{value:t.options.metaDescription,callback:function(e){t.$set(t.options,"metaDescription",e)},expression:"options.metaDescription"}}):t._e(),t.edit?t._e():s("core-html-tags-editor",{attrs:{"line-numbers":!1,"tags-context":t.object.name+"Description","default-tags":t.$tags.getDefaultTags(t.type,t.object.name,"description")},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddDescription)+" ")]},proxy:!0}],null,!1,1726597184)})]},proxy:!0}],null,!1,2372372956)}):t._e()],1)},i=[],a=s("9c0e"),o={mixins:[a["h"]],props:{type:{type:String,required:!0},object:{type:Object,required:!0},separator:{type:String,required:!0},options:{type:Object,required:!0},edit:{type:Boolean,default:function(){return!0}}},data:function(){return{titleCount:0,descriptionCount:0,strings:{showInSearchResults:this.$t.__("Show in Search Results",this.$td),clickToAddTitle:this.$t.__("Click on the tags below to insert variables into your title.",this.$td),metaDescription:this.$t.__("Meta Description",this.$td),clickToAddDescription:this.$t.__("Click on the tags below to insert variables into your meta description.",this.$td),noIndexDescription:this.$t.__('Selecting "No" will no-index this page.',this.$td)}}},watch:{show:function(t){this.options.advanced.robotsMeta.noindex=!t,t||(this.options.advanced.robotsMeta.default=!1)}},computed:{title:function(){return this.$t.sprintf(this.$t.__("%1$s Title",this.$td),this.object.singular)},show:function(){return this.options.show}},methods:{}},r=o,c=s("2877"),l=Object(c["a"])(r,n,i,!1,null,null,null);e["default"]=l.exports},"5be7":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-view"},[t.isUnlicensed?t._e():s("schema",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}),t.isUnlicensed?s("schema-lite",{attrs:{type:t.type,object:t.object,options:t.options,"show-bulk":t.showBulk}}):t._e()],1)},i=[],a=s("5530"),o=s("2f62"),r=s("9d33"),c={components:{Schema:r["default"],SchemaLite:r["default"]},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean},computed:Object(a["a"])({},Object(o["c"])(["isUnlicensed"]))},l=c,u=s("2877"),d=Object(u["a"])(l,n,i,!1,null,null,null);e["default"]=d.exports},"6d2e":function(t,e,s){"use strict";s("be6d")},"75f3":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.titleAttributeFormat},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","default-tags":["image_title","separator_sa","site_title","alt_tag"]},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddVariablesTitleTag)+" ")]},proxy:!0}])})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.stripPunctuationTitleAttribute,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{value:!1,name:"stripTitlePunctuation",options:[{label:t.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.enabled,value:!0}]}})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.altTagAttributeFormat},scopedSlots:t._u([{key:"content",fn:function(){return[s("core-html-tags-editor",{attrs:{"line-numbers":!1,single:"","default-tags":["image_title","separator_sa","site_title","alt_tag"]},scopedSlots:t._u([{key:"tags-description",fn:function(){return[t._v(" "+t._s(t.strings.clickToAddVariablesAltTag)+" ")]},proxy:!0}])})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.stripPunctuationForAltAttribute,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{value:!1,name:"stripAltPunctuation",options:[{label:t.$constants.GLOBAL_STRINGS.disabled,value:!1,activeClass:"dark"},{label:t.$constants.GLOBAL_STRINGS.enabled,value:!0}]}})]},proxy:!0}])})],1)},i=[],a={data:function(){return{strings:{titleAttributeFormat:this.$t.__("Title Attribute Format",this.$tdPro),stripPunctuationTitleAttribute:this.$t.__("Strip Punctuation for Title Attributes",this.$tdPro),clickToAddVariablesTitleTag:this.$t.__("Click on the tags below to insert variables into your title attribute.",this.$tdPro),altTagAttributeFormat:this.$t.__("Alt Tag Attribute Format",this.$tdPro),clickToAddVariablesAltTag:this.$t.__("Click on the tags below to insert variables into your alt tag attribute.",this.$tdPro),stripPunctuationForAltAttribute:this.$t.__("Strip Punctuation for Alt Attributes",this.$tdPro)}}}},o=a,r=s("2877"),c=Object(r["a"])(o,n,i,!1,null,null,null);e["default"]=c.exports},"7a06":function(t,e,s){},"7c50":function(t,e,s){"use strict";s("0ee8")},8031:function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-image-seo"},[s("blur"),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("image-seo","image-seo-upsell"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("image-seo",null,"home"),"feature-list":[t.strings.setTitleAttributes,t.strings.setAltTagAttributes,t.strings.stripPunctuationTitles,t.strings.stripPunctuationAltTags]},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t.$addons.requiresUpgrade("aioseo-image-seo")&&t.$addons.currentPlans("aioseo-image-seo")?s("core-alert",{attrs:{type:"red"}},[t._v(" "+t._s(t.strings.thisFeatureRequires)+" "),s("strong",[t._v(t._s(t.$addons.currentPlans("aioseo-image-seo")))])]):t._e(),t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},i=[],a=s("75f3"),o={components:{Blur:a["default"]},data:function(){return{strings:{titleAttributeFormat:this.$t.__("Title Attribute Format",this.$td),thisFeatureRequires:this.$t.__("This feature requires one of the following plans:",this.$td),ctaDescription:this.$t.__("The Image SEO module is a premium feature that enables you to globally control the Title Attribute and Alt Text for attachment pages and images that are embedded in your content. These can be set based on a specified format, similar to the Title Format settings in the Global Settings menu.",this.$tdPro),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Image SEO",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Image SEO is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),setTitleAttributes:this.$t.__("Set title attributes",this.$td),setAltTagAttributes:this.$t.__("Set alt tag attributes",this.$td),stripPunctuationTitles:this.$t.__("Strip punctuation for titles",this.$td),stripPunctuationAltTags:this.$t.__("Strip punctuation for alt tags",this.$td)}}}},r=o,c=s("2877"),l=Object(c["a"])(r,n,i,!1,null,null,null);e["default"]=l.exports},"9d33":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-schema-lite"},[s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.schemaType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-select",{staticClass:"schema-type",attrs:{size:"medium",options:t.schemaTypes,value:t.getSchemaTypeOption("Article")}})]},proxy:!0}])}),s("core-settings-row",{attrs:{name:t.strings.articleType,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-radio-toggle",{attrs:{name:t.object.name+"articleType",value:"BlogPosting",options:[{label:t.strings.article,value:"Article"},{label:t.strings.blogPost,value:"BlogPosting"},{label:t.strings.newsArticle,value:"NewsArticle"}]}})]},proxy:!0}])})],1),s("cta",{attrs:{"feature-list":t.strings.graphs,"cta-link":t.$links.getPricingUrl("schema-markup","schema-markup-upsell",t.object.name+"-post-type"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("schema-markup",t.object.name,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},i=[],a=(s("7db0"),{props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data:function(){return{schemaTypes:[{value:"none",label:this.$t.__("None",this.$td)},{value:"Article",label:this.$t.__("Article",this.$td)}],strings:{schemaType:this.$t.__("Schema Type",this.$td),articleType:this.$t.__("Article Type",this.$td),article:this.$t.__("Article",this.$td),blogPost:this.$t.__("Blog Post",this.$td),newsArticle:this.$t.__("News Article",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Advanced Schema Markup is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s allows you to customize the structured data markup for your Posts so that search engines can generate rich snippets for your content in search results.",this.$td),"AIOSEO","Pro"),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Advanced Schema Markup",this.$td),graphs:[this.$t.__("Product (WooCommerce and EDD support)",this.$td),this.$t.__("FAQ Page",this.$td),this.$t.__("Software Application",this.$td),this.$t.__("Recipe",this.$td),this.$t.__("Course",this.$td)]}}},methods:{getSchemaTypeOption:function(t){return this.schemaTypes.find((function(e){return e.value===t}))}}}),o=a,r=(s("4edb"),s("2877")),c=Object(r["a"])(o,n,i,!1,null,null,null);e["default"]=c.exports},"9e7b":function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"aioseo-sa-ct-custom-fields"},[s("core-blur",[s("core-settings-row",{attrs:{name:t.strings.customFields,align:""},scopedSlots:t._u([{key:"content",fn:function(){return[s("base-textarea",{attrs:{"min-height":200}}),s("div",{staticClass:"aioseo-description"},[t._v(" "+t._s(t.strings.customFieldsDescription)+" ")])]},proxy:!0}])})],1),s("cta",{attrs:{"cta-link":t.$links.getPricingUrl("custom-fields","custom-fields-upsell",t.object.name+"-post-type"),"button-text":t.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("custom-fields",t.object.name,"home")},scopedSlots:t._u([{key:"header-text",fn:function(){return[t._v(" "+t._s(t.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[t._v(" "+t._s(t.strings.ctaDescription)+" ")]},proxy:!0}])})],1)},i=[],a=s("5530"),o=(s("7db0"),s("2f62")),r={props:{type:{type:String,required:!0},object:{type:Object,required:!0}},data:function(){return{strings:{customFields:this.$t.__("Custom Fields",this.$td),customFieldsDescription:this.$t.__("List of custom field names to include in the SEO Page Analysis. Add one per line.",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s gives you advanced customizations for our page analysis feature, letting you add custom fields to analyze.",this.$td),"AIOSEO","Pro"),ctaButtonText:this.$t.__("Upgrade to Pro and Unlock Custom Fields",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Custom Fields are only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro")}}},computed:Object(a["a"])({},Object(o["e"])(["options"])),methods:{getSchemaTypeOption:function(t){return this.schemaTypes.find((function(e){return e.value===t}))}}},c=r,l=(s("7c50"),s("2877")),u=Object(l["a"])(c,n,i,!1,null,null,null);e["default"]=u.exports},be6d:function(t,e,s){},e64f:function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div")},i=[],a=s("2877"),o={},r=Object(a["a"])(o,n,i,!1,null,null,null);e["default"]=r.exports}}]);