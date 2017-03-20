var eventUtil = {
  
  // 添加句柄
  addHandler:function(element, type, handler){
    if(element.addEventListener){
      // DOM2
      element.addEventListener(type, handler, false);
    }else if(element.attachEvent){
      // IE
      element.attachEvent("on" + type, handler);
    }else{
      // DOM0
      element['on' + type] = handler;
    }
  },

  // 删除句柄
  removeHandler:function(element, type, handler){
    if(element.removeEventListener){
      // DOM2
      element.removeEventListener(type, handler, false);
    }else if(element.detachEvent){
      // IE
      element.detachEvent("on" + type, handler);
    }else{
      // DOM0
      element['on' + type] = null;
    }
  },

  // 获取event
  getEvent:function(event){
    // IE8之前通过window.event获取event
    return event? event: window.event;
  },

  // 获取event.type
  getType:function(event){
    return event.type;
  },

  // 获取event.target
  getTarget:function(event){
    return event.target || event.srcElement;
  },

  // 取消事件冒泡
  stopPropagation:function(event){
    if(event.stopPropagation){
      event.stopPropagation();
    }else{
      event.cancelBubble = true;
    }
  },

  // 取消事件默认行为
  preventDefault:function(event){
    if(event.preventDefault){
      event.preventDefault();
    }else{
      event.returnValue = false;
    }
  }
}
