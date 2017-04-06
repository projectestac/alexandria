<?php

class com_wiris_quizzes_impl_QuestionInstanceImpl extends com_wiris_util_xml_SerializableImpl implements com_wiris_quizzes_api_QuestionInstance{
	public function __construct() {
		if(!php_Boot::$skip_constructor) {
		parent::__construct();
		$this->userData = new com_wiris_quizzes_impl_UserData();
		$this->userData->randomSeed = Std::random(65536);
		$this->variables = null;
		$this->checks = null;
	}}
	public function concatenate($a, $e) {
		$b = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$b[$i1] = $a[$i1];
				unset($i1);
			}
		}
		$b[$a->length] = $e;
		return $b;
	}
	public function setChecksCompoundAnswers() {
		if($this->compoundChecks === null) {
			return;
		}
		$answers = $this->checks->keys();
		while($answers->hasNext()) {
			$a = $this->checks->get($answers->next());
			$i = null;
			{
				$_g1 = 0; $_g = $a->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					_hx_array_get($a, $i1)->setAnswers(new _hx_array(array()));
					_hx_array_get($a, $i1)->setCorrectAnswers(new _hx_array(array()));
					unset($i1);
				}
				unset($_g1,$_g);
			}
			unset($i,$a);
		}
		$answers = $this->compoundChecks->keys();
		while($answers->hasNext()) {
			$answerString = $answers->next();
			$answer = Std::parseInt($answerString);
			$correctAnswers = $this->compoundChecks->get($answerString)->keys();
			while($correctAnswers->hasNext()) {
				$correctAnswerString = $correctAnswers->next();
				$correctAnswer = Std::parseInt($correctAnswerString);
				$checks = $this->compoundChecks->get($answerString)->get($correctAnswerString);
				$i = null;
				{
					$_g1 = 0; $_g = $checks->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$a = $checks[$i1];
						$a->setCorrectAnswers($this->concatenate($a->getCorrectAnswers(), $correctAnswer));
						$a->setAnswers($this->concatenate($a->getAnswers(), $answer));
						unset($i1,$a);
					}
					unset($_g1,$_g);
				}
				unset($i,$correctAnswerString,$correctAnswer,$checks);
			}
			unset($correctAnswers,$answerString,$answer);
		}
	}
	public function setParameter($name, $value) {
		$this->userData->setParameter($name, $value);
	}
	public function getTextVariables() {
		return $this->getTypeVariables(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
	}
	public function getMathMLVariables() {
		return $this->getTypeVariables(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML);
	}
	public function getTypeVariables($type) {
		if($this->hasVariables() && $this->variables->exists($type)) {
			return $this->variables->get($type);
		} else {
			return null;
		}
	}
	public function getHandwritingConstraints() {
		if($this->handConstraints === null) {
			$json = $this->getLocalDataImpl(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS);
			if($json !== null) {
				$this->handConstraints = com_wiris_quizzes_impl_HandwritingConstraints::readHandwritingConstraints($json);
			}
		}
		return $this->handConstraints;
	}
	public function setHandwritingConstraints($question) {
		$this->handConstraints = com_wiris_quizzes_impl_HandwritingConstraints::newHandwritingConstraints();
		$this->handConstraints->addQuestionConstraints(_hx_deref(($question))->getImpl());
		$this->handConstraints->addQuestionInstanceConstraints($this);
	}
	public function serializeHandConstraints() {
		if($this->handConstraints !== null) {
			$this->setLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS, $this->handConstraints->toJSON());
		}
	}
	public function areVariablesReady() {
		if($this->variables !== null) {
			if($this->variables->exists(com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF)) {
				$cache = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getImagesCache();
				$images = $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF);
				$names = $images->keys();
				while($names->hasNext()) {
					$filename = $images->get($names->next());
					if(com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT) {
						$s = com_wiris_system_Storage::newStorage($filename);
						if(!$s->exists()) {
							return false;
						}
						unset($s);
					} else {
						if($cache->get($filename) === null) {
							return false;
						}
					}
					unset($filename);
				}
			}
		}
		return true;
	}
	public function getAssertionChecks($correctAnswer, $studentAnswer) {
		if($this->checks !== null) {
			$answerChecks = $this->checks->get("" . _hx_string_rec($studentAnswer, ""));
			if($answerChecks !== null) {
				$res = new _hx_array(array());
				$i = null;
				{
					$_g1 = 0; $_g = $answerChecks->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$ca = _hx_array_get($answerChecks, $i1)->getCorrectAnswers();
						$j = null;
						{
							$_g3 = 0; $_g2 = $ca->length;
							while($_g3 < $_g2) {
								$j1 = $_g3++;
								if($ca[$j1] === $correctAnswer) {
									$res->push($answerChecks[$i1]);
								}
								unset($j1);
							}
							unset($_g3,$_g2);
						}
						unset($j,$i1,$ca);
					}
				}
				return $res;
			}
		}
		return null;
	}
	public function getStudentAnswersLength() {
		return com_wiris_quizzes_impl_QuestionInstanceImpl_0($this);
	}
	public function getStudentAnswer($index) {
		if($this->userData->answers !== null && $index < $this->userData->answers->length) {
			$a = $this->userData->answers[$index];
			if($a !== null) {
				return $a->content;
			}
		}
		return null;
	}
	public function setStudentAnswer($index, $answer) {
		$this->userData->setUserAnswer($index, $answer);
	}
	public function setCasSession($session) {
		if($session !== null && strlen(trim($session)) > 0) {
			$this->setLocalData(com_wiris_quizzes_impl_LocalData::$KEY_CAS_SESSION, $session);
		} else {
			if($this->localData !== null) {
				$i = null;
				{
					$_g1 = 0; $_g = $this->localData->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						if(_hx_array_get($this->localData, $i1)->name === com_wiris_quizzes_impl_LocalData::$KEY_CAS_SESSION) {
							$this->localData->remove($this->localData[$i1]);
						}
						unset($i1);
					}
				}
			}
		}
	}
	public function setRandomSeed($seed) {
		$this->userData->randomSeed = $seed;
	}
	public function parseTextBoolean($text) {
		$trues = new _hx_array(array("true", "cierto", "cert", "tõene", "ziur", "vrai", "wahr", "vero", "waar", "verdadeiro", "certo"));
		$i = null;
		{
			$_g1 = 0; $_g = $trues->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($trues[$i1] === $text) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function updateAnswer($qi) {
		$i = null;
		if($this->userData->answers === null) {
			$this->userData->answers = new _hx_array(array());
		}
		{
			$_g1 = 0; $_g = $qi->userData->answers->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$a = $qi->userData->answers[$i1];
				if($this->userData->answers->length > $i1) {
					$this->userData->answers[$i1] = $a;
				} else {
					$this->userData->answers->push($a);
				}
				unset($i1,$a);
			}
		}
		$this->setLocalData(com_wiris_quizzes_impl_LocalData::$KEY_CAS_SESSION, $qi->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_CAS_SESSION));
	}
	public function updateFromStudentQuestionInstance($qi) {
		$ii = $qi;
		$this->userData->answers = $ii->userData->answers;
		$this->localData = $ii->localData;
	}
	public function getStudentQuestionInstance() {
		$qi = new com_wiris_quizzes_impl_QuestionInstanceImpl();
		$qi->userData->randomSeed = 0;
		$qi->userData->answers = $this->userData->answers;
		$qi->handConstraints = $this->handConstraints;
		$qi->localData = $this->localData;
		$qi->checks = $this->checks;
		$qi->compoundChecks = $this->compoundChecks;
		return $qi;
	}
	public function getBooleanVariableValue($name) {
		if(!$this->hasVariables()) {
			return false;
		}
		$name = trim($name);
		if(StringTools::startsWith($name, "#")) {
			$name = _hx_substr($name, 1, null);
		}
		if($this->variables->exists(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT)) {
			$textvars = $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
			if($textvars->exists($name)) {
				$textValue = $textvars->get($name);
				return $this->parseTextBoolean($textValue);
			}
		}
		if($this->variables->exists(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML)) {
			$mmlvars = $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML);
			if($mmlvars->exists($name)) {
				$mmlValue = $mmlvars->get($name);
				$striptags = new EReg("<[^>]*>", "");
				$textValue = $striptags->replace($mmlValue, "");
				$textValue = trim($textValue);
				return $this->parseTextBoolean($textValue);
			}
		}
		return false;
	}
	public function hashToVariables($h, $a) {
		if($h === null) {
			return null;
		}
		if($a === null) {
			$a = new _hx_array(array());
		}
		$t = $h->keys();
		while($t->hasNext()) {
			$type = $t->next();
			$vars = $h->get($type);
			$names = $vars->keys();
			while($names->hasNext()) {
				$name = $names->next();
				$v = new com_wiris_quizzes_impl_Variable();
				$v->type = $type;
				$v->name = $name;
				$v->content = $vars->get($name);
				$a->push($v);
				unset($v,$name);
			}
			unset($vars,$type,$names);
		}
		return $a;
	}
	public function variablesToHash($a, $h) {
		if($a === null) {
			return null;
		}
		if($h === null) {
			$h = new Hash();
		}
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$v = $a[$i1];
				if(!$h->exists($v->type)) {
					$h->set($v->type, new Hash());
				}
				$h->get($v->type)->set($v->name, $v->content);
				unset($v,$i1);
			}
		}
		return $h;
	}
	public function hashToChecks($h) {
		if($h === null) {
			return null;
		}
		$a = new _hx_array(array());
		$answers = $h->keys();
		while($answers->hasNext()) {
			$answer = $answers->next();
			$a = $a->concat($h->get($answer));
			unset($answer);
		}
		return $a;
	}
	public function checksToHash($a, $h) {
		if($a === null) {
			return null;
		}
		if($h === null) {
			$h = new Hash();
		}
		$i = null;
		{
			$_g1 = 0; $_g = $a->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = $a[$i1];
				if(!$h->exists("" . _hx_string_rec($c->getAnswer(), ""))) {
					$h->set("" . _hx_string_rec($c->getAnswer(), ""), new _hx_array(array()));
				}
				$answerChecks = $h->get("" . _hx_string_rec($c->getAnswer(), ""));
				$answerChecks->push($c);
				unset($i1,$c,$answerChecks);
			}
		}
		return $h;
	}
	public function getAnswerFeedback($q, $answer, $lang, $correct, $incorrect, $syntax, $equivalent, $check) {
		if($this->checks === null || !$this->checks->exists(_hx_string_rec($answer, "") . "")) {
			return null;
		}
		$checks = $this->checks->get(_hx_string_rec($answer, "") . "");
		$h = new com_wiris_quizzes_impl_HTMLGui($lang);
		$ass = new _hx_array(array());
		$i = null;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = $checks[$i1];
				if($correct && $c->value === 1.0 || $incorrect && $c->value === 0.0) {
					if($syntax && StringTools::startsWith($c->assertion, "syntax_") || $equivalent && StringTools::startsWith($c->assertion, "equivalent_") || $check && StringTools::startsWith($c->assertion, "check_")) {
						$ass->push($c);
					}
				}
				unset($i1,$c);
			}
		}
		$html = $h->getAssertionFeedback($q, $ass);
		return $html;
	}
	public function getMatchingChecks($correctAnswer, $userAnswer) {
		$result = new _hx_array(array());
		if($this->checks === null || !$this->checks->exists(_hx_string_rec($userAnswer, "") . "")) {
			return $result;
		}
		$checks = $this->checks->get(_hx_string_rec($userAnswer, "") . "");
		$i = null;
		$eval = 0;
		$check = 0;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_array_get($checks, $i1)->getCorrectAnswer() === $correctAnswer) {
					$c = $checks[$i1];
					if(StringTools::startsWith($c->assertion, "syntax_")) {
						$result->insert($eval, $checks[$i1]);
						$eval++;
						$check++;
					} else {
						if(StringTools::startsWith($c->assertion, "equivalent_")) {
							$result->insert($check, $checks[$i1]);
							$check++;
						} else {
							$result->push($checks[$i1]);
						}
					}
					unset($c);
				}
				unset($i1);
			}
		}
		return $result;
	}
	public function isAnswerSyntaxCorrect($answer) {
		$correct = true;
		if($this->checks !== null && $this->checks->exists(_hx_string_rec($answer, "") . "")) {
			$checks = $this->checks->get(_hx_string_rec($answer, "") . "");
			$i = null;
			{
				$_g1 = 0; $_g = $checks->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$ac = $checks[$i1];
					$j = null;
					{
						$_g3 = 0; $_g2 = com_wiris_quizzes_impl_Assertion::$syntactic->length;
						while($_g3 < $_g2) {
							$j1 = $_g3++;
							if($ac->assertion === com_wiris_quizzes_impl_Assertion::$syntactic[$j1]) {
								$correct = $correct && $ac->value === 1.0;
							}
							unset($j1);
						}
						unset($_g3,$_g2);
					}
					unset($j,$i1,$ac);
				}
			}
		}
		return $correct;
	}
	public function getCompoundComponents() {
		$n = -1;
		if($this->compoundChecks !== null) {
			$it = $this->compoundChecks->keys();
			while($it->hasNext()) {
				$key = $it->next();
				try {
					$m = _hx_mod(Std::parseInt($key), 1000);
					if($m > $n) {
						$n = $m;
					}
					unset($m);
				}catch(Exception $�e) {
					$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
					$e = $_ex_;
					{
					}
				}
				unset($key,$e);
			}
		}
		return $n + 1;
	}
	public function isNumberPart($c) {
		$parts = new _hx_array(array(".", "-", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"));
		$i = null;
		{
			$_g1 = 0; $_g = $parts->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if($parts[$i1] === $c) {
					return true;
				}
				unset($i1);
			}
		}
		return false;
	}
	public function getCompoundGradeDistribution($s) {
		$n = $this->getCompoundComponents();
		$d = new _hx_array(array());
		if($s === null || trim($s) === "") {
			$i = null;
			{
				$_g = 0;
				while($_g < $n) {
					$i1 = $_g++;
					$d[$i1] = 1.0 / $n;
					unset($i1);
				}
			}
		} else {
			$content = false;
			$j = 0;
			$l = haxe_Utf8::length($s);
			$i = 0;
			$sb = new StringBuf();
			while($i < $l && $j < $n) {
				$c = com_wiris_quizzes_impl_QuestionInstanceImpl_1($this, $content, $d, $i, $j, $l, $n, $s, $sb);
				$digit = $this->isNumberPart($c);
				if($digit) {
					$sb->add($c);
					$content = true;
				}
				if($content && (!$digit || $i + 1 === $l)) {
					$t = 0.0;
					try {
						$t = Std::parseFloat($sb->b);
					}catch(Exception $�e) {
						$_ex_ = ($�e instanceof HException) ? $�e->e : $�e;
						$e = $_ex_;
						{
						}
					}
					$d[$j] = $t;
					$j++;
					$sb = new StringBuf();
					$content = false;
					unset($t,$e);
				}
				$i++;
				unset($digit,$c);
			}
			while($j < $n) {
				$d[$j] = 0.0;
				$j++;
			}
			$sum = 0.0;
			{
				$_g = 0;
				while($_g < $n) {
					$j1 = $_g++;
					$sum += $d[$j1];
					unset($j1);
				}
			}
			{
				$_g = 0;
				while($_g < $n) {
					$j1 = $_g++;
					$d[$j1] = $d->�a[$j1] / $sum;
					unset($j1);
				}
			}
		}
		return $d;
	}
	public function getCompoundAnswerGrade($correctAnswer, $studentAnswer, $index, $q) {
		$n = $this->getCompoundComponents();
		if($index < 0 || $index >= $n) {
			throw new HException("Compound answer index out of bounds.");
		}
		$checks = $this->getCompoundAnswerChecks($correctAnswer, $studentAnswer, $index);
		$grade = 0.0;
		if($checks !== null) {
			$grade = $this->prodChecks($checks, -1, -1);
		}
		return $grade;
	}
	public function prodChecks($checks, $correctAnswer, $studentAnswer) {
		$grade = 1.0;
		$i = null;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(($correctAnswer === -1 || com_wiris_util_type_Arrays::containsInt(_hx_array_get($checks, $i1)->getCorrectAnswers(), $correctAnswer)) && ($studentAnswer === -1 || com_wiris_util_type_Arrays::containsInt(_hx_array_get($checks, $i1)->getAnswers(), $studentAnswer))) {
					$grade = $grade * _hx_array_get($checks, $i1)->value;
				}
				unset($i1);
			}
		}
		return $grade;
	}
	public function andChecks($checks) {
		$j = null;
		$correct = true;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$j1 = $_g1++;
				$correct = $correct && _hx_array_get($checks, $j1)->value === 1.0;
				unset($j1);
			}
		}
		return $correct;
	}
	public function getCompoundAnswerChecks($correctAnswer, $studentAnswer, $index) {
		return $this->compoundChecks->get(_hx_string_rec(1000 + $studentAnswer * 1000 + $index, "") . "")->get(_hx_string_rec(1000 + $correctAnswer * 1000 + $index, "") . "");
	}
	public function getAnswerGrade($correctAnswer, $studentAnswer, $q) {
		$grade = 0.0;
		$question = (($q !== null) ? _hx_deref(($q))->getImpl() : null);
		if($question !== null && $question->getAssertionIndex(com_wiris_quizzes_impl_Assertion::$EQUIVALENT_FUNCTION, $correctAnswer, $studentAnswer) !== -1) {
			$checks = $this->checks->get(_hx_string_rec($studentAnswer, "") . "");
			$grade = $this->prodChecks($checks, $correctAnswer, $studentAnswer);
		} else {
			if($question !== null && $question->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_TRUE && $question->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE) === com_wiris_quizzes_impl_LocalData::$VALUE_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTE) {
				$distribution = $this->getCompoundGradeDistribution($question->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_COMPOUND_ANSWER_GRADE_DISTRIBUTION));
				$i = null;
				{
					$_g1 = 0; $_g = $distribution->length;
					while($_g1 < $_g) {
						$i1 = $_g1++;
						$checks = $this->getCompoundAnswerChecks($correctAnswer, $studentAnswer, $i1);
						if($checks !== null) {
							if($this->andChecks($checks)) {
								$grade += $distribution[$i1];
							}
						}
						unset($i1,$checks);
					}
				}
			} else {
				$correct = $this->isAnswerMatching($correctAnswer, $studentAnswer);
				$grade = (($correct) ? 1.0 : 0.0);
			}
		}
		return $grade;
	}
	public function isAnswerCorrect($answer) {
		$correct = true;
		if($this->checks !== null && $this->checks->exists(_hx_string_rec($answer, "") . "")) {
			$checks = $this->checks->get(_hx_string_rec($answer, "") . "");
			$correct = $this->andChecks($checks);
		}
		return $correct;
	}
	public function getMatchingCorrectAnswer($studentAnswer, $q) {
		$correctAnswer = -1;
		if($this->checks !== null && $this->checks->exists(_hx_string_rec($studentAnswer, "") . "")) {
			$checks = $this->checks->get(_hx_string_rec($studentAnswer, "") . "");
			$correctAnswers = new _hx_array(array());
			$i = null;
			{
				$_g1 = 0; $_g = $checks->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$ca = _hx_array_get($checks, $i1)->getCorrectAnswers();
					$j = null;
					{
						$_g3 = 0; $_g2 = $ca->length;
						while($_g3 < $_g2) {
							$j1 = $_g3++;
							com_wiris_util_type_Arrays::insertSortedSet($correctAnswers, $ca[$j1]);
							unset($j1);
						}
						unset($_g3,$_g2);
					}
					unset($j,$i1,$ca);
				}
			}
			if($correctAnswers->length > 0) {
				$correctAnswer = $correctAnswers[0];
				$maxgrade = $this->getAnswerGrade($correctAnswer, $studentAnswer, $q);
				$j = null;
				{
					$_g1 = 1; $_g = $correctAnswers->length;
					while($_g1 < $_g) {
						$j1 = $_g1++;
						$grade = $this->getAnswerGrade($correctAnswers[$j1], $studentAnswer, $q);
						if($grade > $maxgrade) {
							$maxgrade = $grade;
							$correctAnswer = $j1;
						}
						unset($j1,$grade);
					}
				}
			}
		}
		return $correctAnswer;
	}
	public function isAnswerMatching($correctAnswer, $answer) {
		$correct = true;
		if($this->checks !== null && $this->checks->exists(_hx_string_rec($answer, "") . "")) {
			$checks = $this->checks->get(_hx_string_rec($answer, "") . "");
			$i = null;
			{
				$_g1 = 0; $_g = $checks->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$c = $checks[$i1];
					if(!(StringTools::startsWith($c->getAssertionName(), "syntax") && ($c->getAnswers()->length > 1 || $c->getCorrectAnswers()->length > 1))) {
						if($c->getCorrectAnswer() === $correctAnswer) {
							$correct = $correct && $c->value === 1.0;
						}
					}
					unset($i1,$c);
				}
			}
		}
		return $correct;
	}
	public function isCacheReady() {
		return $this->areVariablesReady();
	}
	public function hasEvaluation() {
		return $this->checks !== null && $this->checks->keys()->hasNext();
	}
	public function hasVariables() {
		return $this->variables !== null && $this->variables->keys()->hasNext();
	}
	public function clearChecks() {
		$this->checks = null;
	}
	public function clearVariables() {
		$this->variables = null;
	}
	public function getBase64Code() {
		if(com_wiris_quizzes_impl_QuestionInstanceImpl::$base64 === null) {
			com_wiris_quizzes_impl_QuestionInstanceImpl::$base64 = new com_wiris_quizzes_impl_Base64();
		}
		return com_wiris_quizzes_impl_QuestionInstanceImpl::$base64;
	}
	public function storeImageVariable($v) {
		$filename = null;
		if(com_wiris_settings_PlatformSettings::$IS_JAVASCRIPT) {
			$filename = haxe_Md5::encode($v->content) . ".b64";
			$s = com_wiris_system_Storage::newStorage($filename);
			if(!$s->exists()) {
				$s->write($v->content);
			}
			if(!$s->exists()) {
				return $v;
			}
		} else {
			$base64 = $this->getBase64Code();
			$value = str_replace("=", "", $v->content);
			$b = $base64->decodeBytes(haxe_io_Bytes::ofString($value));
			$filename = haxe_Md5::encode($value) . ".png";
			$cache = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getImagesCache();
			$cache->set($filename, $b);
		}
		$w = new com_wiris_quizzes_impl_Variable();
		$w->type = com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE_REF;
		$w->content = $filename;
		$w->name = $v->name;
		return $w;
	}
	public function isCompoundAnswer($checks) {
		if($checks !== null && $checks->length > 0) {
			return _hx_array_get($checks, 0)->getCorrectAnswer() >= 1000;
		}
		return false;
	}
	public function collapseCompoundAnswerChecks($checks) {
		$this->compoundChecks = new Hash();
		$i = null;
		{
			$_g1 = 0; $_g = $checks->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				$c = $checks[$i1];
				$correctAnswers = $c->getCorrectAnswers();
				$answers = $c->getAnswers();
				$pairs = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getPairings($c->getCorrectAnswers()->length, $c->getAnswers()->length);
				$j = null;
				{
					$_g3 = 0; $_g2 = $pairs->length;
					while($_g3 < $_g2) {
						$j1 = $_g3++;
						$pair = $pairs[$j1];
						$correctAnswer = $correctAnswers[$pair[0]];
						$userAnswer = $answers[$pair[1]];
						if(!$this->compoundChecks->exists(_hx_string_rec($userAnswer, "") . "")) {
							$this->compoundChecks->set(_hx_string_rec($userAnswer, "") . "", new Hash());
						}
						$answerChecks = $this->compoundChecks->get(_hx_string_rec($userAnswer, "") . "");
						if(!$answerChecks->exists(_hx_string_rec($correctAnswer, "") . "")) {
							$answerChecks->set(_hx_string_rec($correctAnswer, "") . "", new _hx_array(array()));
						}
						$pairchecks = $answerChecks->get(_hx_string_rec($correctAnswer, "") . "");
						$pairchecks->push($c);
						unset($userAnswer,$pairchecks,$pair,$j1,$correctAnswer,$answerChecks);
					}
					unset($_g3,$_g2);
				}
				$c->setAnswer(Math::floor(($c->getAnswer() - 1000) / 1000.0));
				$c->setCorrectAnswer(Math::floor(($c->getCorrectAnswer() - 1000) / 1000.0));
				unset($pairs,$j,$i1,$correctAnswers,$c,$answers);
			}
		}
	}
	public function hasHandwritingConstraints() {
		return $this->handConstraints !== null || $this->getLocalDataImpl(com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS) !== null;
	}
	public function update($response) {
		$qs = $response;
		if($qs !== null && $qs->results !== null) {
			$variables = false;
			$checks = false;
			$i = null;
			{
				$_g1 = 0; $_g = $qs->results->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					$r = $qs->results[$i1];
					$s = com_wiris_quizzes_impl_QuizzesBuilderImpl::getInstance()->getSerializer();
					$tag = $s->getTagName($r);
					if($tag === com_wiris_quizzes_impl_ResultGetVariables::$tagName) {
						$variables = true;
						$rgv = $r;
						$resultVars = $rgv->variables;
						$j = null;
						{
							$_g3 = 0; $_g2 = $resultVars->length;
							while($_g3 < $_g2) {
								$j1 = $_g3++;
								$v = $resultVars[$j1];
								if($v->type === com_wiris_quizzes_impl_MathContent::$TYPE_IMAGE) {
									$resultVars[$j1] = $this->storeImageVariable($v);
								}
								unset($v,$j1);
							}
							unset($_g3,$_g2);
						}
						$this->variables = $this->variablesToHash($rgv->variables, $this->variables);
						unset($rgv,$resultVars,$j);
					} else {
						if($tag === com_wiris_quizzes_impl_ResultGetCheckAssertions::$tagName) {
							if(!$checks) {
								$checks = true;
								$this->checks = null;
							}
							$rgca = $r;
							if($this->isCompoundAnswer($rgca->checks)) {
								$this->collapseCompoundAnswerChecks($rgca->checks);
							}
							$this->checks = $this->checksToHash($rgca->checks, $this->checks);
							unset($rgca);
						}
					}
					unset($tag,$s,$r,$i1);
				}
			}
			if($variables && $this->hasHandwritingConstraints()) {
				$this->getHandwritingConstraints()->addQuestionInstanceConstraints($this);
			}
		}
	}
	public function expandVariablesText($text) {
		if($text === null) {
			return null;
		}
		$h = new com_wiris_quizzes_impl_HTMLTools();
		if(com_wiris_quizzes_impl_MathContent::getMathType($text) === com_wiris_quizzes_impl_MathContent::$TYPE_MATHML) {
			$text = $h->mathMLToText($text);
		}
		if($this->variables === null || $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT) === null) {
			return $text;
		} else {
			$textvars = $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_TEXT);
			return $h->expandVariablesText($text, $textvars);
		}
	}
	public function addAllHashElements($src, $dest) {
		if($src !== null) {
			$it = $src->keys();
			while($it->hasNext()) {
				$name = $it->next();
				$dest->set($name, $src->get($name));
				unset($name);
			}
		}
	}
	public function expandVariablesMathMLEval($equation) {
		$h = new com_wiris_quizzes_impl_HTMLTools();
		if($this->variables === null || $this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML_EVAL) === null) {
			return $this->expandVariablesMathML($equation);
		} else {
			$vars = new Hash();
			$newvars = new Hash();
			$vars->set(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML, $newvars);
			$this->addAllHashElements($this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML), $newvars);
			$this->addAllHashElements($this->variables->get(com_wiris_quizzes_impl_MathContent::$TYPE_MATHML_EVAL), $newvars);
			if(com_wiris_quizzes_impl_MathContent::getMathType($equation) === com_wiris_quizzes_impl_MathContent::$TYPE_TEXT) {
				$equation = $h->textToMathML($equation);
			}
			return $h->expandVariables($equation, $vars);
		}
	}
	public function expandVariablesMathML($equation) {
		$h = new com_wiris_quizzes_impl_HTMLTools();
		if(com_wiris_quizzes_impl_MathContent::getMathType($equation) === com_wiris_quizzes_impl_MathContent::$TYPE_TEXT) {
			$equation = $h->textToMathML($equation);
		}
		return $h->expandVariables($equation, $this->variables);
	}
	public function expandVariables($text) {
		if($text === null) {
			return null;
		}
		$h = new com_wiris_quizzes_impl_HTMLTools();
		$h->setItemSeparator($this->getLocalData(com_wiris_quizzes_impl_LocalData::$KEY_ITEM_SEPARATOR));
		return $h->expandVariables($text, $this->variables);
	}
	public function defaultLocalData($name) {
		return null;
	}
	public function getLocalDataImpl($name) {
		if($this->localData !== null) {
			$i = null;
			{
				$_g1 = 0; $_g = $this->localData->length;
				while($_g1 < $_g) {
					$i1 = $_g1++;
					if(_hx_array_get($this->localData, $i1)->name === $name) {
						return _hx_array_get($this->localData, $i1)->value;
					}
					unset($i1);
				}
			}
		}
		return $this->defaultLocalData($name);
	}
	public function getLocalData($name) {
		if($name === com_wiris_quizzes_impl_LocalData::$KEY_OPENANSWER_HANDWRITING_CONSTRAINTS) {
			if($this->hasHandwritingConstraints()) {
				return $this->getHandwritingConstraints()->getNegativeConstraints()->toJSON();
			} else {
				return null;
			}
		}
		return $this->getLocalDataImpl($name);
	}
	public function setLocalData($name, $value) {
		if($this->localData === null) {
			$this->localData = new _hx_array(array());
		}
		$data = new com_wiris_quizzes_impl_LocalData();
		$data->name = $name;
		$data->value = $value;
		$i = null;
		$found = false;
		{
			$_g1 = 0; $_g = $this->localData->length;
			while($_g1 < $_g) {
				$i1 = $_g1++;
				if(_hx_array_get($this->localData, $i1)->name === $name) {
					$this->localData[$i1] = $data;
					$found = true;
				}
				unset($i1);
			}
		}
		if(!$found) {
			$this->localData->push($data);
		}
	}
	public function newInstance() {
		return new com_wiris_quizzes_impl_QuestionInstanceImpl();
	}
	public function onSerialize($s) {
		$s->beginTag(com_wiris_quizzes_impl_QuestionInstanceImpl::$tagName);
		$this->userData = $s->serializeChildName($this->userData, com_wiris_quizzes_impl_UserData::$TAGNAME);
		$this->setChecksCompoundAnswers();
		$a = $s->serializeArrayName($this->hashToChecks($this->checks), "checks");
		if($this->isCompoundAnswer($a)) {
			$this->collapseCompoundAnswerChecks($a);
		}
		$this->checks = $this->checksToHash($a, null);
		$this->variables = $this->variablesToHash($s->serializeArrayName($this->hashToVariables($this->variables, null), "variables"), null);
		$this->serializeHandConstraints();
		$this->localData = $s->serializeArrayName($this->localData, "localData");
		$s->endTag();
	}
	public $handConstraints;
	public $compoundChecks;
	public $localData;
	public $checks;
	public $variables;
	public $userData;
	public function __call($m, $a) {
		if(isset($this->$m) && is_callable($this->$m))
			return call_user_func_array($this->$m, $a);
		else if(isset($this->�dynamics[$m]) && is_callable($this->�dynamics[$m]))
			return call_user_func_array($this->�dynamics[$m], $a);
		else if('toString' == $m)
			return $this->__toString();
		else
			throw new HException('Unable to call �'.$m.'�');
	}
	static $tagName = "questionInstance";
	static $base64;
	function __toString() { return 'com.wiris.quizzes.impl.QuestionInstanceImpl'; }
}
function com_wiris_quizzes_impl_QuestionInstanceImpl_0(&$�this) {
	if($�this->userData->answers !== null) {
		return $�this->userData->answers->length;
	} else {
		return 0;
	}
}
function com_wiris_quizzes_impl_QuestionInstanceImpl_1(&$�this, &$content, &$d, &$i, &$j, &$l, &$n, &$s, &$sb) {
	{
		$s1 = new haxe_Utf8(null);
		$s1->addChar(haxe_Utf8::charCodeAt($s, $i));
		return $s1->toString();
	}
}
