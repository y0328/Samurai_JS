{"filter":false,"title":"CustomResetPassword.php","tooltip":"/samazon/app/Notifications/CustomResetPassword.php","undoManager":{"mark":24,"position":24,"stack":[[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":48},"action":"insert","lines":["use Illuminate\\Auth\\Notifications\\ResetPassword;"],"id":3}],[{"start":{"row":11,"column":45},"end":{"row":11,"column":46},"action":"remove","lines":["n"],"id":4},{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"remove","lines":["o"]},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"remove","lines":["i"]},{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"remove","lines":["t"]},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"remove","lines":["a"]},{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"remove","lines":["c"]},{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"remove","lines":["i"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"remove","lines":["f"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"remove","lines":["i"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"remove","lines":["t"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"remove","lines":["o"]},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"remove","lines":["N"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"remove","lines":[" "]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"remove","lines":["s"]},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"remove","lines":["d"]},{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":["n"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"remove","lines":["e"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":["t"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"remove","lines":["x"]}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"remove","lines":["e"],"id":5},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"remove","lines":[" "]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"remove","lines":["d"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"remove","lines":["r"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["o"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"remove","lines":["w"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"remove","lines":["s"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"remove","lines":["s"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":["a"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"remove","lines":["P"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["t"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["e"]},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"remove","lines":["s"]},{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"remove","lines":["e"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["R"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"remove","lines":["m"]},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"remove","lines":["o"]},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"remove","lines":["t"]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"remove","lines":["s"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"remove","lines":["u"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"remove","lines":["C"]},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":[" "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"remove","lines":["s"]},{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"remove","lines":["s"]}],[{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"remove","lines":["a"],"id":6},{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"remove","lines":["l"]},{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"remove","lines":["c"]}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":47},"action":"insert","lines":["class CustomResetPassword extends ResetPassword"],"id":7}],[{"start":{"row":13,"column":18},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":18},"action":"insert","lines":["public $token;"],"id":9}],[{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"remove","lines":[")"],"id":10},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"remove","lines":["("]},{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"remove","lines":["t"]},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"remove","lines":["c"]},{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"remove","lines":["u"]},{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"remove","lines":["r"]},{"start":{"row":22,"column":26},"end":{"row":22,"column":27},"action":"remove","lines":["t"]},{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"remove","lines":["s"]},{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"remove","lines":["n"]},{"start":{"row":22,"column":23},"end":{"row":22,"column":24},"action":"remove","lines":["o"]},{"start":{"row":22,"column":22},"end":{"row":22,"column":23},"action":"remove","lines":["c"]},{"start":{"row":22,"column":21},"end":{"row":22,"column":22},"action":"remove","lines":["_"]},{"start":{"row":22,"column":20},"end":{"row":22,"column":21},"action":"remove","lines":["_"]},{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"remove","lines":[" "]},{"start":{"row":22,"column":18},"end":{"row":22,"column":19},"action":"remove","lines":["n"]},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"remove","lines":["o"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"remove","lines":["i"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"remove","lines":["t"]},{"start":{"row":22,"column":14},"end":{"row":22,"column":15},"action":"remove","lines":["c"]}],[{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"remove","lines":["n"],"id":11},{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"remove","lines":["u"]},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"remove","lines":["f"]},{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"remove","lines":[" "]},{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"remove","lines":["c"]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"remove","lines":["i"]},{"start":{"row":22,"column":7},"end":{"row":22,"column":8},"action":"remove","lines":["l"]},{"start":{"row":22,"column":6},"end":{"row":22,"column":7},"action":"remove","lines":["b"]},{"start":{"row":22,"column":5},"end":{"row":22,"column":6},"action":"remove","lines":["u"]},{"start":{"row":22,"column":4},"end":{"row":22,"column":5},"action":"remove","lines":["p"]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":39},"action":"insert","lines":["public function __construct($token)"],"id":12}],[{"start":{"row":23,"column":5},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":24,"column":0},"end":{"row":24,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":30},"action":"insert","lines":["$this->token = $token;"],"id":14}],[{"start":{"row":48,"column":20},"end":{"row":48,"column":21},"action":"remove","lines":["-"],"id":15}],[{"start":{"row":50,"column":66},"end":{"row":50,"column":67},"action":"remove","lines":[";"],"id":16},{"start":{"row":50,"column":65},"end":{"row":50,"column":66},"action":"remove","lines":[")"]},{"start":{"row":50,"column":64},"end":{"row":50,"column":65},"action":"remove","lines":["'"]},{"start":{"row":50,"column":63},"end":{"row":50,"column":64},"action":"remove","lines":["!"]},{"start":{"row":50,"column":62},"end":{"row":50,"column":63},"action":"remove","lines":["n"]},{"start":{"row":50,"column":61},"end":{"row":50,"column":62},"action":"remove","lines":["o"]},{"start":{"row":50,"column":60},"end":{"row":50,"column":61},"action":"remove","lines":["i"]},{"start":{"row":50,"column":59},"end":{"row":50,"column":60},"action":"remove","lines":["t"]},{"start":{"row":50,"column":58},"end":{"row":50,"column":59},"action":"remove","lines":["a"]},{"start":{"row":50,"column":57},"end":{"row":50,"column":58},"action":"remove","lines":["c"]},{"start":{"row":50,"column":56},"end":{"row":50,"column":57},"action":"remove","lines":["i"]},{"start":{"row":50,"column":55},"end":{"row":50,"column":56},"action":"remove","lines":["l"]},{"start":{"row":50,"column":54},"end":{"row":50,"column":55},"action":"remove","lines":["p"]},{"start":{"row":50,"column":53},"end":{"row":50,"column":54},"action":"remove","lines":["p"]},{"start":{"row":50,"column":52},"end":{"row":50,"column":53},"action":"remove","lines":["a"]},{"start":{"row":50,"column":51},"end":{"row":50,"column":52},"action":"remove","lines":[" "]},{"start":{"row":50,"column":50},"end":{"row":50,"column":51},"action":"remove","lines":["r"]},{"start":{"row":50,"column":49},"end":{"row":50,"column":50},"action":"remove","lines":["u"]},{"start":{"row":50,"column":48},"end":{"row":50,"column":49},"action":"remove","lines":["o"]}],[{"start":{"row":50,"column":47},"end":{"row":50,"column":48},"action":"remove","lines":[" "],"id":17},{"start":{"row":50,"column":46},"end":{"row":50,"column":47},"action":"remove","lines":["g"]},{"start":{"row":50,"column":45},"end":{"row":50,"column":46},"action":"remove","lines":["n"]},{"start":{"row":50,"column":44},"end":{"row":50,"column":45},"action":"remove","lines":["i"]},{"start":{"row":50,"column":43},"end":{"row":50,"column":44},"action":"remove","lines":["s"]},{"start":{"row":50,"column":42},"end":{"row":50,"column":43},"action":"remove","lines":["u"]},{"start":{"row":50,"column":41},"end":{"row":50,"column":42},"action":"remove","lines":[" "]},{"start":{"row":50,"column":40},"end":{"row":50,"column":41},"action":"remove","lines":["r"]},{"start":{"row":50,"column":39},"end":{"row":50,"column":40},"action":"remove","lines":["o"]},{"start":{"row":50,"column":38},"end":{"row":50,"column":39},"action":"remove","lines":["f"]},{"start":{"row":50,"column":37},"end":{"row":50,"column":38},"action":"remove","lines":[" "]},{"start":{"row":50,"column":36},"end":{"row":50,"column":37},"action":"remove","lines":["u"]},{"start":{"row":50,"column":35},"end":{"row":50,"column":36},"action":"remove","lines":["o"]},{"start":{"row":50,"column":34},"end":{"row":50,"column":35},"action":"remove","lines":["y"]},{"start":{"row":50,"column":33},"end":{"row":50,"column":34},"action":"remove","lines":[" "]},{"start":{"row":50,"column":32},"end":{"row":50,"column":33},"action":"remove","lines":["k"]},{"start":{"row":50,"column":31},"end":{"row":50,"column":32},"action":"remove","lines":["n"]},{"start":{"row":50,"column":30},"end":{"row":50,"column":31},"action":"remove","lines":["a"]},{"start":{"row":50,"column":29},"end":{"row":50,"column":30},"action":"remove","lines":["h"]},{"start":{"row":50,"column":28},"end":{"row":50,"column":29},"action":"remove","lines":["T"]},{"start":{"row":50,"column":27},"end":{"row":50,"column":28},"action":"remove","lines":["'"]},{"start":{"row":50,"column":26},"end":{"row":50,"column":27},"action":"remove","lines":["("]},{"start":{"row":50,"column":25},"end":{"row":50,"column":26},"action":"remove","lines":["e"]},{"start":{"row":50,"column":24},"end":{"row":50,"column":25},"action":"remove","lines":["n"]}],[{"start":{"row":50,"column":23},"end":{"row":50,"column":24},"action":"remove","lines":["i"],"id":18},{"start":{"row":50,"column":22},"end":{"row":50,"column":23},"action":"remove","lines":["l"]},{"start":{"row":50,"column":21},"end":{"row":50,"column":22},"action":"remove","lines":[">"]},{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"remove","lines":["-"]},{"start":{"row":50,"column":16},"end":{"row":50,"column":20},"action":"remove","lines":["    "]},{"start":{"row":50,"column":12},"end":{"row":50,"column":16},"action":"remove","lines":["    "]},{"start":{"row":50,"column":8},"end":{"row":50,"column":12},"action":"remove","lines":["    "]},{"start":{"row":50,"column":4},"end":{"row":50,"column":8},"action":"remove","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"remove","lines":["    "]},{"start":{"row":49,"column":61},"end":{"row":50,"column":0},"action":"remove","lines":["",""]},{"start":{"row":49,"column":60},"end":{"row":49,"column":61},"action":"remove","lines":[")"]},{"start":{"row":49,"column":59},"end":{"row":49,"column":60},"action":"remove","lines":[")"]},{"start":{"row":49,"column":58},"end":{"row":49,"column":59},"action":"remove","lines":["'"]},{"start":{"row":49,"column":57},"end":{"row":49,"column":58},"action":"remove","lines":["/"]},{"start":{"row":49,"column":56},"end":{"row":49,"column":57},"action":"remove","lines":["'"]},{"start":{"row":49,"column":55},"end":{"row":49,"column":56},"action":"remove","lines":["("]},{"start":{"row":49,"column":54},"end":{"row":49,"column":55},"action":"remove","lines":["l"]},{"start":{"row":49,"column":53},"end":{"row":49,"column":54},"action":"remove","lines":["r"]},{"start":{"row":49,"column":52},"end":{"row":49,"column":53},"action":"remove","lines":["u"]},{"start":{"row":49,"column":51},"end":{"row":49,"column":52},"action":"remove","lines":[" "]},{"start":{"row":49,"column":50},"end":{"row":49,"column":51},"action":"remove","lines":[","]},{"start":{"row":49,"column":49},"end":{"row":49,"column":50},"action":"remove","lines":["'"]},{"start":{"row":49,"column":48},"end":{"row":49,"column":49},"action":"remove","lines":["n"]},{"start":{"row":49,"column":47},"end":{"row":49,"column":48},"action":"remove","lines":["o"]}],[{"start":{"row":49,"column":46},"end":{"row":49,"column":47},"action":"remove","lines":["i"],"id":19},{"start":{"row":49,"column":45},"end":{"row":49,"column":46},"action":"remove","lines":["t"]},{"start":{"row":49,"column":44},"end":{"row":49,"column":45},"action":"remove","lines":["c"]},{"start":{"row":49,"column":43},"end":{"row":49,"column":44},"action":"remove","lines":["A"]},{"start":{"row":49,"column":42},"end":{"row":49,"column":43},"action":"remove","lines":[" "]},{"start":{"row":49,"column":41},"end":{"row":49,"column":42},"action":"remove","lines":["n"]},{"start":{"row":49,"column":40},"end":{"row":49,"column":41},"action":"remove","lines":["o"]},{"start":{"row":49,"column":39},"end":{"row":49,"column":40},"action":"remove","lines":["i"]},{"start":{"row":49,"column":38},"end":{"row":49,"column":39},"action":"remove","lines":["t"]},{"start":{"row":49,"column":37},"end":{"row":49,"column":38},"action":"remove","lines":["a"]},{"start":{"row":49,"column":36},"end":{"row":49,"column":37},"action":"remove","lines":["c"]},{"start":{"row":49,"column":35},"end":{"row":49,"column":36},"action":"remove","lines":["i"]},{"start":{"row":49,"column":34},"end":{"row":49,"column":35},"action":"remove","lines":["f"]},{"start":{"row":49,"column":33},"end":{"row":49,"column":34},"action":"remove","lines":["i"]},{"start":{"row":49,"column":32},"end":{"row":49,"column":33},"action":"remove","lines":["t"]},{"start":{"row":49,"column":31},"end":{"row":49,"column":32},"action":"remove","lines":["o"]},{"start":{"row":49,"column":30},"end":{"row":49,"column":31},"action":"remove","lines":["N"]},{"start":{"row":49,"column":29},"end":{"row":49,"column":30},"action":"remove","lines":["'"]},{"start":{"row":49,"column":28},"end":{"row":49,"column":29},"action":"remove","lines":["("]},{"start":{"row":49,"column":27},"end":{"row":49,"column":28},"action":"remove","lines":["n"]},{"start":{"row":49,"column":26},"end":{"row":49,"column":27},"action":"remove","lines":["o"]},{"start":{"row":49,"column":25},"end":{"row":49,"column":26},"action":"remove","lines":["i"]},{"start":{"row":49,"column":24},"end":{"row":49,"column":25},"action":"remove","lines":["t"]},{"start":{"row":49,"column":23},"end":{"row":49,"column":24},"action":"remove","lines":["c"]}],[{"start":{"row":49,"column":22},"end":{"row":49,"column":23},"action":"remove","lines":["a"],"id":20},{"start":{"row":49,"column":21},"end":{"row":49,"column":22},"action":"remove","lines":[">"]},{"start":{"row":49,"column":20},"end":{"row":49,"column":21},"action":"remove","lines":["-"]},{"start":{"row":49,"column":16},"end":{"row":49,"column":20},"action":"remove","lines":["    "]},{"start":{"row":49,"column":12},"end":{"row":49,"column":16},"action":"remove","lines":["    "]},{"start":{"row":49,"column":8},"end":{"row":49,"column":12},"action":"remove","lines":["    "]},{"start":{"row":49,"column":4},"end":{"row":49,"column":8},"action":"remove","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "]},{"start":{"row":48,"column":66},"end":{"row":49,"column":0},"action":"remove","lines":["",""]},{"start":{"row":48,"column":65},"end":{"row":48,"column":66},"action":"remove","lines":[")"]},{"start":{"row":48,"column":64},"end":{"row":48,"column":65},"action":"remove","lines":["'"]},{"start":{"row":48,"column":63},"end":{"row":48,"column":64},"action":"remove","lines":["."]},{"start":{"row":48,"column":62},"end":{"row":48,"column":63},"action":"remove","lines":["n"]},{"start":{"row":48,"column":61},"end":{"row":48,"column":62},"action":"remove","lines":["o"]},{"start":{"row":48,"column":60},"end":{"row":48,"column":61},"action":"remove","lines":["i"]},{"start":{"row":48,"column":59},"end":{"row":48,"column":60},"action":"remove","lines":["t"]},{"start":{"row":48,"column":58},"end":{"row":48,"column":59},"action":"remove","lines":["a"]},{"start":{"row":48,"column":57},"end":{"row":48,"column":58},"action":"remove","lines":["c"]},{"start":{"row":48,"column":56},"end":{"row":48,"column":57},"action":"remove","lines":["i"]},{"start":{"row":48,"column":55},"end":{"row":48,"column":56},"action":"remove","lines":["f"]},{"start":{"row":48,"column":54},"end":{"row":48,"column":55},"action":"remove","lines":["i"]},{"start":{"row":48,"column":53},"end":{"row":48,"column":54},"action":"remove","lines":["t"]},{"start":{"row":48,"column":52},"end":{"row":48,"column":53},"action":"remove","lines":["o"]},{"start":{"row":48,"column":51},"end":{"row":48,"column":52},"action":"remove","lines":["n"]}],[{"start":{"row":48,"column":50},"end":{"row":48,"column":51},"action":"remove","lines":[" "],"id":21},{"start":{"row":48,"column":49},"end":{"row":48,"column":50},"action":"remove","lines":["e"]},{"start":{"row":48,"column":48},"end":{"row":48,"column":49},"action":"remove","lines":["h"]},{"start":{"row":48,"column":47},"end":{"row":48,"column":48},"action":"remove","lines":["t"]},{"start":{"row":48,"column":46},"end":{"row":48,"column":47},"action":"remove","lines":[" "]},{"start":{"row":48,"column":45},"end":{"row":48,"column":46},"action":"remove","lines":["o"]},{"start":{"row":48,"column":44},"end":{"row":48,"column":45},"action":"remove","lines":["t"]},{"start":{"row":48,"column":43},"end":{"row":48,"column":44},"action":"remove","lines":[" "]},{"start":{"row":48,"column":42},"end":{"row":48,"column":43},"action":"remove","lines":["n"]},{"start":{"row":48,"column":41},"end":{"row":48,"column":42},"action":"remove","lines":["o"]},{"start":{"row":48,"column":40},"end":{"row":48,"column":41},"action":"remove","lines":["i"]},{"start":{"row":48,"column":39},"end":{"row":48,"column":40},"action":"remove","lines":["t"]},{"start":{"row":48,"column":38},"end":{"row":48,"column":39},"action":"remove","lines":["c"]},{"start":{"row":48,"column":37},"end":{"row":48,"column":38},"action":"remove","lines":["u"]},{"start":{"row":48,"column":36},"end":{"row":48,"column":37},"action":"remove","lines":["d"]},{"start":{"row":48,"column":35},"end":{"row":48,"column":36},"action":"remove","lines":["o"]},{"start":{"row":48,"column":34},"end":{"row":48,"column":35},"action":"remove","lines":["r"]},{"start":{"row":48,"column":33},"end":{"row":48,"column":34},"action":"remove","lines":["t"]},{"start":{"row":48,"column":32},"end":{"row":48,"column":33},"action":"remove","lines":["n"]},{"start":{"row":48,"column":31},"end":{"row":48,"column":32},"action":"remove","lines":["i"]},{"start":{"row":48,"column":30},"end":{"row":48,"column":31},"action":"remove","lines":[" "]},{"start":{"row":48,"column":29},"end":{"row":48,"column":30},"action":"remove","lines":["e"]},{"start":{"row":48,"column":28},"end":{"row":48,"column":29},"action":"remove","lines":["h"]},{"start":{"row":48,"column":27},"end":{"row":48,"column":28},"action":"remove","lines":["T"]}],[{"start":{"row":48,"column":26},"end":{"row":48,"column":27},"action":"remove","lines":["'"],"id":22},{"start":{"row":48,"column":25},"end":{"row":48,"column":26},"action":"remove","lines":["("]},{"start":{"row":48,"column":24},"end":{"row":48,"column":25},"action":"remove","lines":["e"]},{"start":{"row":48,"column":23},"end":{"row":48,"column":24},"action":"remove","lines":["n"]},{"start":{"row":48,"column":22},"end":{"row":48,"column":23},"action":"remove","lines":["i"]},{"start":{"row":48,"column":21},"end":{"row":48,"column":22},"action":"remove","lines":["l"]},{"start":{"row":48,"column":20},"end":{"row":48,"column":21},"action":"remove","lines":[">"]}],[{"start":{"row":48,"column":20},"end":{"row":51,"column":107},"action":"insert","lines":["->subject(__('Reset Password'))","+                    ->line(__('Click button below and reset password.'))","+                    ->action(__('Reset password'), url(route('password.reset', $this->token, false)))","+                    ->line(__('If you did not request a password reset, no further action is required.'));"],"id":23}],[{"start":{"row":51,"column":0},"end":{"row":51,"column":1},"action":"remove","lines":["+"],"id":24}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":1},"action":"remove","lines":["+"],"id":25}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":1},"action":"remove","lines":["+"],"id":26}]]},"ace":{"folds":[],"scrolltop":531,"scrollleft":0,"selection":{"start":{"row":49,"column":0},"end":{"row":49,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1639833988341,"hash":"6f40f404016cbc3a4d881cba1bf3332328c0ea57"}