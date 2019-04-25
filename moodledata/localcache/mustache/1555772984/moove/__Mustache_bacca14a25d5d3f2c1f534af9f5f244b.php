<?php

class __Mustache_bacca14a25d5d3f2c1f534af9f5f244b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '            <h3>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3d46676fa71043dd556eac6777c89162($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <h4>';
        $value = $this->resolveValue($context->find('getintouchcontent'), $context);
        $buffer .= $value;
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <ul>
';
        // 'website' section
        $value = $context->find('website');
        $buffer .= $this->sectionF445cf1e276891ecd3740f9ec34907f2($context, $indent, $value);
        // 'mobile' section
        $value = $context->find('mobile');
        $buffer .= $this->section7685ae9be7b5bcbaec0e2d27fc13ee61($context, $indent, $value);
        // 'mail' section
        $value = $context->find('mail');
        $buffer .= $this->sectionF174db049d0f3e3c0acdafd45b2f774d($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        // 'facebook' section
        $value = $context->find('facebook');
        $buffer .= $this->section8fa266463e7ebd7f4776c9f6140f84a2($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'twitter' section
        $value = $context->find('twitter');
        $buffer .= $this->sectionC97cf7af3722f162fe9b5fea1d4ecc9f($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'googleplus' section
        $value = $context->find('googleplus');
        $buffer .= $this->sectionD12a1705a50265e8e991656bf3ea8605($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'linkedin' section
        $value = $context->find('linkedin');
        $buffer .= $this->section4a1af00dfa570aec61fd6bb2f76f6783($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'youtube' section
        $value = $context->find('youtube');
        $buffer .= $this->sectionA9bd7db636f952928c8760cc75b58622($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'instagram' section
        $value = $context->find('instagram');
        $buffer .= $this->sectionAc499bc80310fac39d3e787f2b57fb88($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'disablebottomfooter' inverted section
        $value = $context->find('disablebottomfooter');
        if (empty($value)) {
            
            $buffer .= $indent . '  <footer id="page-footer" class="p-y-1">
';
            $buffer .= $indent . '      <div class="container-fluid">
';
            $buffer .= $indent . '          <div id="course-footer">';
            $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madewithmoodle">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section35f635c8ba97bc48efcfa9ed9dd99cf3($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '              <a href="https://moodle.org"><img src="';
            $value = $this->resolveValue($context->findDot('output.get_pix_image_url_base'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '/moodle-logo-white.png" alt="Moodle logo"></a>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '          <div class="madeby">
';
            $buffer .= $indent . '              <p>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section56e3b38ca8d3097861df300611a406de($context, $indent, $value);
            $buffer .= ' <i class="text-danger fa fa-heart"></i> ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section7a1b67c3b84451cafdd6fc65fb7ab03a($context, $indent, $value);
            $buffer .= ' <a href="http://conecti.me">conecti.me</a></p>
';
            $buffer .= $indent . '          </div>
';
            $buffer .= $indent . '      </div>
';
            $buffer .= $indent . '  </footer>
';
        }
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section3d46676fa71043dd556eac6777c89162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stayintouch, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'stayintouch, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF445cf1e276891ecd3740f9ec34907f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-globe"></i>
                        <a href="{{{website}}}" target="_blank">{{{website}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-globe"></i>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7685ae9be7b5bcbaec0e2d27fc13ee61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-phone"></i>
                        <a href="tel:{{{mobile}}}" target="_blank">{{{mobile}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-phone"></i>
';
                $buffer .= $indent . '                        <a href="tel:';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF174db049d0f3e3c0acdafd45b2f774d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-envelope"></i>
                        <a href="mailto:{{{mail}}}" target="_blank">{{{mail}}}</a>
                    </li>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-envelope"></i>
';
                $buffer .= $indent . '                        <a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fa266463e7ebd7f4776c9f6140f84a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook">
                    <i class="slicon-social-facebook"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="facebook">
';
                $buffer .= $indent . '                    <i class="slicon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC97cf7af3722f162fe9b5fea1d4ecc9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter">
                    <i class="slicon-social-twitter"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="twitter">
';
                $buffer .= $indent . '                    <i class="slicon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD12a1705a50265e8e991656bf3ea8605(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{googleplus}}}" target="_blank" class="googleplus">
                    <i class="slicon-social-gplus"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('googleplus'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="googleplus">
';
                $buffer .= $indent . '                    <i class="slicon-social-gplus"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a1af00dfa570aec61fd6bb2f76f6783(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin">
                    <i class="slicon-social-linkedin"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="linkedin">
';
                $buffer .= $indent . '                    <i class="slicon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9bd7db636f952928c8760cc75b58622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube">
                    <i class="slicon-social-youtube"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="youtube">
';
                $buffer .= $indent . '                    <i class="slicon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc499bc80310fac39d3e787f2b57fb88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram">
                    <i class="slicon-social-instagram"></i>
                  </a>
                </li>
              ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= $value;
                $buffer .= '" target="_blank" class="instagram">
';
                $buffer .= $indent . '                    <i class="slicon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f635c8ba97bc48efcfa9ed9dd99cf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madewitmoodle, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'madewitmoodle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56e3b38ca8d3097861df300611a406de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madeby, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'madeby, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a1b67c3b84451cafdd6fc65fb7ab03a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'by, theme_moove';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'by, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
