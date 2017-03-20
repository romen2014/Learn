window.onload = function(){
  var aLi = document.getElementsByTagName('li');
  for (var i = 0; i < aLi.length; i++) {
    aLi[i].index = i;
    aLi[i].onmouseover = function(){
      this.className = "lihover";
      // 高度优化

      var height0 = (this.index-1) * 30 + 42;  //一级菜单顶部距离页面顶部距离
      var oDiv = this.getElementsByTagName('div')[0];
      var height1offset = oDiv.offsetHeight;
      var height1top = oDiv.style.top;
      var height1 = height1offset + height1top; //悬浮层下边框距离页面顶部距离
      if(height1 < height0 - 30){
        oDiv.style.top = height0 + 30 + "px";
      }
    }
    aLi[i].onmouseout = function(){
      this.className = "";
    }
  }
}
