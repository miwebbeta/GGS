// Script for add button on TinyMCE editor
 
(function() {
  tinymce.PluginManager.add('MY_mce_button',function(editor,url) {
    editor.addButton( 'MY_mce_button', {
     title: 'Buttons Menu',
     type: 'menubutton',
     image : url+'/tiny_nota.png',
     menu: [{
       text: 'Normal buttons',
       value: '',
       onclick: function() { editor.insertContent(this.value()); },
       menu: [{
         text: 'Orange',
         value: '[button-orange text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }
         },{
         text: 'Blu',
         value: '[button-blu text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }
         },{
         text: 'Gray',
         value: '[button-gray text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'Yellow',
         value: '[button-yellow text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'Black',
         value: '[button-black text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }}
		   ,{
         text: 'Pink',
         value: '[button-pink text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'Red',
         value: '[button-red text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'Green',
         value: '[button-green text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'Purple',
         value: '[button-purple text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }}]
       },
	   {
       text: 'Big buttons',
       value: '',
       onclick: function() { editor.insertContent(this.value()); },
       menu: [{
         text: 'BigOrange',
         value: '[bigbutton-orange text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }
         },{
         text: 'BigBlu',
         value: '[bigbutton-blu text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }
         },{
         text: 'BigGray',
         value: '[bigbutton-gray text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'BigYellow',
         value: '[bigbutton-yellow text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'BigBlack',
         value: '[bigbutton-black text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }}
		   ,{
         text: 'BigPink',
         value: '[bigbutton-pink text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'BigRed',
         value: '[bigbutton-red text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'BigGreen',
         value: '[bigbutton-green text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }},{
         text: 'BigPurple',
         value: '[bigbutton-purple text="Download" title="Download plugin" url="http://www.svegliatemplate.com/"]',
         onclick: function(e) {
           e.stopPropagation(); editor.insertContent(this.value()); }}]
       },]
     });
  });
})();