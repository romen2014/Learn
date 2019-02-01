/**
 * 计算器js
 */
window.onload = function(){
  /**
   * 被运算数
   * 当运算符（+ - * /）按键被按下时，将屏显数字存储下来。
   * 当求值符被（=）按键被按下时，将运算结果存储下来。
   * @type {String}
   */
  var num1 = "";

  /**
   * 运算符标识
   * 绝对值算法含义：1->加法运算，2->减法运算，3->乘法运算，4->除法运算。
   * 零状态：初始状态。
   *        此状态下不进行求值运算。
   * 负数状态：求值运算符刚被按下时为负数状态。
   *         此状态标识主要用于在第二个屏显数字未被输入前，
   *         保留当前屏显数字作为默认被运算数，用于后续运算。
   *         如操作[12+=]则计算[12+12]。
   * 正数状态：求值运算状态。
   *         当运算符按键被按下后，后续运算数按键或求值按键会将负数状态变更为正数状态，
   *         以备运算使用。
   * 变更运算：在非正数状态下，再次输入运算符，则变更运算法则，重新接受运算状态负数标识。
   * 追加运算：在正数状态下，再次输入运算符，则将之前的输入进行一次运算求值，再接受运算状态负数标识。
   *
   * @type {Number}
   */
  var calculate = 0;

  /**
   * 屏显对象
   * 屏显对象的值用于传值给被运算数或运算数，以便后续求值使用。
   * @type {Object}
   */
  var oTxt = document.getElementById('show');

  /**
   * 页面加载时执行重置
   */
  allclear();

  /**
   * AC按钮事件
   * @type {[type]}
   */
  document.getElementById('ac').onclick = function(){
    allclear();
  }

  /**
   * 数字键按键事件
   * step1:运算符标识为负数状态时，变更为正，并重置屏显。
   * step2:在屏显中获取并追加输入结果
   * step3:屏显首位处理
   * PS:第11次循环为dot小数点按键处理，其事件与数字按键事件完全一致
   * @type {Number}
   */
  for(i = 0; i < 11; i++){
    document.getElementById(i).onclick = function(){
      if(calculate < 0){
        calculate = 0 - calculate;
        resetShow();
      }
      oTxt.value += this.value;
      setHead();
    }
  }

  /**
   * 运算符标识数组
   * 用于从页面获取相关运算符控件并加载相应事件
   * @type {Array}
   */
  var calArr = ['add', 'subtract', 'multiply', 'divide'];

  /**
   * 运算符按键事件
   * 正处理(追加运算)：先将之前的运算处理完毕、将屏显结果存储到被运算数、再保留新的运算符法则。
   * 非正处理（变更运算）：将屏显数字存储到被运算数、保留新的运算符法则。
   * @type {[type]}
   */
  for (var index in calArr) {
    document.getElementById(calArr[index]).onclick = function(){
      if(calculate > 0){
        oTxt.value = count(num1, oTxt.value, calculate);
      }
      num1 = oTxt.value;
      calculate = 0 - this.value.charCodeAt();
    }
  }

  /**
   * 求值键按键事件
   * @type {[type]}
   */
  document.getElementById('is').onclick = function(){
    if(calculate == 0){
      return;
    }
    if(calculate < 0){
      calculate = 0 - calculate;
    }
    num1 = oTxt.value = count(num1 == ""? oTxt.value: num1, oTxt.value , calculate);
    resetCalculate();
  };

  /**
   * 求值函数
   * @return {[type]} [description]
   */
  function count(num1, num2, calculate){
    switch (calculate) {
      case 0:
        return;
      case 43:
        return parseFloat(num1) + parseFloat(num2);
      case 45:
        return parseFloat(num1) - parseFloat(num2);
      case 42:
        return parseFloat(num1) * parseFloat(num2);
      case 47:
        return parseFloat(num1) / parseFloat(num2);
      default:
        return;
    }
  }

  /**
   * 重置被运算数
   */
  function resetNum1(){
    num1 = "";
  }

  /**
   * 重置运算符标识
   */
  function resetCalculate(){
    calculate = 0;
  }

  /**
   * 重置屏显
   */
  function resetShow(){
    oTxt.value = 0;
  }

  /**
   * 重置被运算数、运算标识符、屏显
   * @return {[type]} [description]
   */
  function allclear(){
    resetNum1();
    resetCalculate();
    resetShow();
  }

  /**
   * 屏显首位处理函数
   * 如首位是小数点，则在其前面补0。
   * 其它情况清除首位的0。
   * @return {[type]} [description]
   */
  function setHead(){
    if(oTxt.value.indexOf("0.") == 0){
      return;
    }
    if(oTxt.value.indexOf(".") == 0){
      oTxt.value = "0" + oTxt.value;
      return;
    }
    if(oTxt.value.indexOf("0") == 0){
      oTxt.value = oTxt.value.substring(1);
      return;
    }
  }
}
