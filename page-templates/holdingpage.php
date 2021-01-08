<?php
/**
 * ============== Template Name: Holding Page
 *
 * @package rossross
 */
get_header();?>

<?php $heroImage = get_field('background_image');?>

<div class="hero h100" style="background-image: url(<?php echo $heroImage['url'];?>);">
    <div class="container">
        <div class="col">
            <div class="hero__content home_hero">
                <div class="inner-section">
                    <div class="company-title">
                        <svg width="100%" height="100%" viewBox="0 0 1058 353" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xml:space="preserve" xmlns:serif="http://www.serif.com/"
                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                            <use xlink:href="#_Image1" x="0" y="0" width="1057.33px" height="352.801px"
                                transform="matrix(0.999362,0,0,0.999437,0,0)" />
                            <defs>
                                <image id="_Image1" width="1058px" height="353px"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABCIAAAFhCAYAAAClJQs2AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAgAElEQVR4nOzdZ7gkZbX28XsNA8OQhhwkIwoGRAFBFNQDBjAgKoqiAmLAeI6Cx5yPvooZs2LGBKggoCJBQcFMkJxBJGdmBibP/X54ajs9PVXd1b2ru6p7/3/XVVfv3ZVWdXelVU8IAQCAkWB7TUmb5wwbS1pD0mo5w0xJSyQtkDS/5XXi79mSbpN0e/Z6W8v/N0fEA8PZOgAAMFVE3QEAAIDl2Z4u6bGSdpa0S/b6SEmzagjnJknnS7ogez0/Iu6sIQ4AADAmSEQAAFAz2+tL2kfS7kpJhx0lrVprUJ3drJbEhFJy4vZ6QwIAAKOCRAQAADWw/UhJL5C0n6QnS5pWb0STdpuWJSYukPSniLi73pAAAEATkYgAAGBIbO8m6cVKCYhH1hzOoC2RdLak4yT9IiLuqTccAADQFCQiAAAYINsrKSUfjpS0a83h1GWxpLOUkhInRsT9NccDAABqRCICAIABsL2GpNdIepukreqNplEWSjpDKSnxy4iYXXM8AABgyEhEAABQIdsh6b8lfUjSOjWH03QLJJ2mlJQ4JSLm1hwPAAAYAhIRAABUxPYmkr4n6Vk1hzKK5kn6taQfSjo5IpbWHA8AABgQEhEAAFTA9oskfVPSenXHMgauk/R5Sd+NiIfqDgYAAFSLRAQAAJNgezVJX5J0WN2xjKF7JH1N0pci4s66gwEAANUgEQEAwCTY/pGkg+qOY8zNV6qycVREXFt3MAAAYHJIRAAA0Cfbb1B6Yo/hWCzpW5I+EhG31x0MAADoD4kIAAD6YHtnSedJmlF3LFPQg5I+J+nTETGn7mAAAEBvSEQAANAj22tLukDS1nXHMsXdJeljkr4eEQsn3rS9sqTdJO0saWNJG0raSNJMpS5DFypV9/inUg8dlw05bgAApjQSEQAA9Mj2SZJeUHcc+I8bJZ0uaZGkRyslIVbrYf4bJJ0q6asRcWXl0QEAgOWQiAAAoAe2D5f09brjwEAsUuo29KMR8WDdwQAAMK5IRAAAUJLtTSVdLmmtumPBQN0s6YiIOKHuQAAAGEfT6g4AAIAR8jWRhJgKNpN0vO1v2l6p7mAAABg3lIgAAKAE28+QdEbdcWDoTpH0soh4qO5AAAAYF5SIAACgC9urSjqg7jhQi+dL+p3t9esOBACAcUGJCAAAWtheS9L+kh4vafts2FIk76e6qyXtExE31B0IAACjjkQEAGDKsx2S/kvSYZJeJGlmvRGhoe6Q9JyIuKDuQAAAGGUkIgAAU5rtV0r6P0lb1RwKRsNcSS+OiNPrDgQAgFFFIgIAMCXZfoRSLxh71x0LRs4iSc+MiHPqDgQAgFFEIgIAMKXYnibpvZLeJ2nVmsPB6LpH0m4RcV3dgQAAMGpIRAAApoys94sfS3ph3bFgLFwpafeIuL/uQAAAGCW0AA4AmBJsz5L0W5GEQHW2l3S87el1BwIAwCghEQEAGHu2N5H0R0lPrTsWjJ1nSjq67iAAABglVM0AAIw12zMlnStpp7pjwVg7NCK+X3cQAACMAhIRAICxZvtHkg6qOw6MvXslbR8Rd9UdCAAATUfVDADA2LL9DpGEwHCsK+mzdQcBAMAooEQEAGAs2X66pDMlrVRzKJha9o6I39UdBAAATUYiAgAwdmyvLOkSSdvVHQumnKslPS4iFtQdCAAATUXVDADAOHq7SEKgHo+U9J66gwAAoMkoEQEAGCu2HybpKklr1B0LpqwFkraMiDvqDgQAgCaiRAQAYNwcJZIQqNcMSW+sOwgAAJqKEhEAgLFhe0tJ14kGKlG/OyVtQVsRAACsiBIRAIBx8maRhEAzbCjpFXUHAQBAE1EiAgAwFmyvJulmSevUHQuQuTQidqg7CAAAmoYSEQCAcXGwSEKgWR5r+xl1BwEAQNOQiAAAjItD6g4AyPGmugMAAKBpqJoBABh5tjeQdLtIsKN55kpaNyIW1R0IAABNwQUbAGAc7CvOaWimNSQ9pe4gAABoEi7aAADj4Ll1BzCG7lV6mo/Je3bdAQAA0CQkIgAAI832NHGjV6V/SNolItaTtK6kp0s6utaIRt8+dQcAAECT0EYEAGCk2d5C0r/qjmNMzJX0yIi4rX2E7XdJ+uTwQxoLlrRJRNxRdyAAADQBJSIAAKPu4XUHMEa+mJeEkKSIOErSN9revlfSuyQ9TNIGktaTtLekCwYZ5AgKSc+qOwgAAJqCRAQAYNSRiKhOt5KSn2v5+6uSto6IT0XEbRFxd0TcGxG/k/RMSXcPLMrRtEvdAQAA0BQkIgAAo45ERHV26zQyIq6WdLGk/46IN0fE7PZpbD9J0q8lrT+YEEfWVnUHAABAU0yvOwAAACZpm7oDGCN72X5GRJzZYZpnRsSd7W/a3kzSUZJeLtqgyrNl3QEAANAUlIgAAIw6SkRU60u2Vy4aWZCEOFzSVZIOEkmIIiQiAADIkIgAAIw6EhHV2l7S28pObPvjkr4uabWWt+dI+qGkN0k6XtIDVQY4ota2PavuIAAAaAKeWgAARpbtdSXdU3ccY+h+pe4m5xdNYHu6pG9JOqRt1C8lvTwi5rVMu7GkS5V61ZjKdoyIi+sOAgCAulEiAgAwytapO4ARdLukEyVd3WGatSW9sGik7dUknaIVkxCnSnpJaxJCkiLidklH9BXteNm87gAAAGgCEhEAgFG2oO4ARswfJD0hIl4k6fGSftZh2ld3GPd1Sfu0vXe3pIMjYlHBPCdJWlI20DG1dt0BAADQBCQiAACjjEREeddKem5WOkFZqYWDJV1XMP3etld4gm/7UEmvypn+PRFxX9HKs64+p3q1hDXrDgAAgCYgEQEAGGUkIspZJOmgiJjb+maWjPjvgnmmKSUq/sP2oyR9OWfaGyR9p0Qct5WYZpzRsCoAACIRAQAYbQ+J4v5lfCQi/l4w7jcqLhXxook/bM+UdJyk1XOm+3JELC0Rx10lphln/237zba5/gIATGmcCAEAIysiFku6vu44Gu5WSZ8tGhkRlvTtgtGPbPn7bZJ2yJlmjlLvGWVM9UTEKkolSi60/VISEgCAqYoTIABg1F1ZdwCTZEl/l/QRSf8j6X2SfiBpdkXL/0Snbjgz35W0OOf9NWxvaHtGFlue72XtP5RxZ8npxt3jlEqXXGb74KwrVAAAAADAKLD9KY+uW2zvVLBdM2wfZvu+SSz/dqckQpnP8cSCZexu+/UF45bY3raH7+rQEjHfZ/vunrd0tF1v+3DbK5f9LAEAGGWUiAAAjLqr6g6gTxdJ2jUiLsgbGRELIuI7StUh/tznOs6IiLINep5Y8P4jJB1ZMO70iLi2h3i6Vc04QdKWkh4m6ac9LHfUba3UJer5tnetOxgAAAaNRAQAYNQ9VHcAfbhe0p4RcUu3CSPiZknPVX9VUM7uYdrTlKqJtHublm8rotVJPcbTKSlyt6TDI2J2RCxU6rEjN0kzxnaQ9GfbR9mOuoMBAGBQSEQAAEbdKPaa8e72rjQ7iYj7JD1PUre2Htqd08M67pR0fs6oJ3SY7dQe41m/w7gfZ9s5Ec8iSa+QNK/HdYy6aZLeKekY05glAGBM0TgSAGBobG8kaTNJG7cNa0pqfwJsSfdKurltuDXrLWPCqCUi/hQRJ/Q6U0RcZ/toSe8qOcstPVabkKQzJe1SctqLypToaNMpEfHD9jci4krbn5D00R7XMw5eI2lV2weX7BoVAICRQSICADAQtldRepr+ZEm7Z8NmFSx6qe07lJISt0iaWcEyh+kjk5j3E5LertQNZDelS0O0+FMP057Sx/KLEhFXR8TfC8YdI+kDkqZiQ46vkHSWUq8mAACMDRIRAIBK2N5YKdkwkXjYWdKqA1jVNEmbZMMTB7D8QbpX0u/6nTkiHrD9V0l7lpj87D5W0UsiotdqGVJxIuJHRTNExO22T5L0kj7WNw4+bvuEXqryAADQdNQ9BAD0xfYqtve3faztGyTdJukXkt4h6SkaTBJi1J3SVq2kH2UTGXntPXQUEfdIurrEpHMkFZVg6KQoEbFCtYw2Z/WxrnGxiaR31x0EAABVIhEBACjNdtje0/Y3JN2u1OXjKyVtVWtgo+MXFSyjbCLi5j6Xf16JaS6KiLweNrpZL+e9P0fE9V3mu6SPdY2TI21vWHcQAABUhUQEAKCrLAHxEkn/lPQHSa+XtE69UY2cRZJOr2A5f1H3LksXSrqrz+WXqZ5xYZ/LzisR8csS813R5/rGxaqSdqs7CAAAqkIiAgBQyPY02wcqPZE+XtIONYc0yq6JiF6731xBRCyUdHeXyW7vs8SCNNhExLo5711TYr5Ffa5vnHTqRhUAgJFCY5UAgFy2t5F0rFLjk5i8Kp/qdzt/99qtZqsrlEpUdOqZo8pERLdqGRLXKxKJCADAGKFEBABgBbZfo1QNgyREdS6vcFkDS0RkJSk6VetYqD62xfbKktbIGXVDidnX7HV9Y4jSSACAsUEiAgDwH7bXzLpK/JbybxrRvysrXNYgS0RInRMRN0REP1Ul8kpD3BsRD5SYd/c+1jduuGYDAIwNijoCACSlJISk34qbvkGZU+GyOlWbkCafiLizw7h/97nMvEREmdIQkrRnn+scJ90aKAUAYGSQXQcAkIQYjiUVLmu1LuP77bpzQqcSEf0mIvK67iybiHhqn+scJyQiAABjg0QEAExxJCGGZmkVC7E9U93P3/0mCyYMIhGxcc57XRMmtteR9Ng+1zlOSEQAAMYGiQgAmMJsT5N0nEhCDEMliQh1Lw0hSTdNch2dEhH9lrZ4WM57ZUqJPEVcr0iT/04BAGgM2ogAgBFkezVJW0uaIWle2zA3Isre9H5c0r4DCRLtqur5YUaX8Usl3TrJdQyijYhN+pzvVX3ON26q7P4VAIBakYgAgAbLiuHvodSN5raStsmGvGLuE+6w/S1J34iIwptG2wdKeneF4aKz7StazoIu4x+MiMUVrStPv0mOvETEyp1msL2dpAP6XN+4IREBABgbJCIAoEFsryRpV0l7Z8Pu6v4EvN1Gkt4n6d22T5R0VET8o209B0k6ZvIRowfbVbSceV3Gr1TBOvJ6uJhwe5/LzEtEdCsl8R5RLWPC5XUHAABAVUhEAEAD2H6CpIMlvVwpkVCFlZSeJh9g+3eSTpM0S9Iukp5d0TpQXlUlIrolIqq4cS9KRCyRdHefy8xLOmxaNLHtrSS9os91jaNf275S0tWSrsqGqyNistVwAAAYOhIRAFAT2xtKOkSpDvwOA17dXtmA+jza9oyI6Fa1oqOIsO35klYtmGSQJSLu6qH9kXZ5SYfCRISkd4rrlFYPz4bntr5pe46WJSfakxQPDjtIAADKiLoDAICpxvaWSjdZh6n4ZhLj6aURccJkF2L7XknrdJhkw4jo1PNFt+Wfq9RbRbsbImKbPpa3uqS5OaMWS1o/Ih5om35XSX9Q79WSsLxblJOgkHRjRJTpsQQAgIHgSQMADInt7ZXqvB8kjr9T1cGSJp2IUKqe0SkR8SRJp/SzYNvTJe1UNLqfZUravOD96UpP+H/csv7NJJ0kkhBV2DQb2ktDLbB9nZZPUEyUoui36g0AAKVxIQwAA5bVdf+0pBeJhvemun1sbzCZ0gqZ+V3G764+ExFK1YRmFozrt1rGFh3GfdT2yREx1/ZGkn6p/rv6RDkzJD06G5aTlbbJK0VxzWSrFQEAMIFEBAAMiO2VJb1D0vslrVZzOGiG6ZJeK+kTk1zOel3G72/7/X2257BHh3FVl4iQUrsH19m+UOnJfccuPTFw6yolsnZve39J1ljmBZLOz14vjIi8KjcAAHREGxEAMAC295T0deU8ccSUt1DSnhHxt35mtr2OpHtLTHpYRHy3j+VfJGnHgtH9thHxEUkf7HU+NN5SSddoWWLifKXkxAMd5wIATHkkIgCgQrbXk/QZpd4wOMaiyE2SnhARZRIKy8m6er2gxKT/lvToXp5Y295d0p86TLJE0poR0a0L0fblnizp+b3Mg5FlSddp+ZITF/TzWwcAjC8ukgGgIrYfI+lXkrasOxaMhN9Jelmv7UXYfpWkH5Sc/HRJz4uIRSWX/X2lBjU72a2X0hy2Z0q6R8u3O3GZpPuUnqiHpCdIWqPsModsjqRbJd2pVMVqVsuwSo1xjZobJP1F0rmSzpN0ySS6ggUAjDgSEQBQAdvPknS80s0JUNbdkv47In5Sdgbbpyr1NFHWjyS9KiI6tu9g+8lKXWau1GV5R0fE28qu3PbzJZ0s6UGl3jG+FhEXtk0zQ9JTlbbruZK2Lbv8itwt6R+S/q7UOOOtSl1f3tqpREmWZFlf0iMkbZ8N22Wvm4vrrE5ma/nExF8j4sF6QwIADAsnSACYJNuHS/qyaAAY/TtZqUrPuZ0SBrbXl3Sbev+tfTYi3tFhuatLukjlEgAPSNqmTFF722so3dyfL+mIiLizTLC2nyfpc0o3+FWbrVRd4O8TQ0TcWPVKss/0UZIe0zZsIa6/8ixW+g2eNzFExK31hgQAGBROhADQJ9vTJH1K0pF1x4KRtVTpZvhWpafyN0u6UNL5eTdhtveXdKCku7TsHD5TqaeD9dpeZ7TNfmREfC4vCNvvk/QGpdIQ01qGif/Xapvlz5KeEREPddo42x+U9KeIOLPTdAXzTpd0kKQ3StpG0gbq/bplrtLn+Y9sOF/S1d1KhwyS7VUkbaTURekmkjbOXjdQ+t7WyRm6lVIZVzdoWWLiXEmX1fndAQCqQyICAPpk+5uSXld3HBhJf5P0E0nHRcRtg1hB9kS+NTGxjqRfRcT8Ppa1mlIy4OEtwzxJpyqV4licM8+qktTP+gpiWFnppv1hLcPEDfz9ku5QasfhjpbhrnFoh8D2mspPUqyn9BlMfB6bZv+vWk+kA3eHpLMknSnpjIi4ueZ4AAB9IhEBAH2wfYSkz9YdB0bK/ZK+KOkHEXFd3cFgfNleV8sSE62Jm4n/N1cqlTHq14FXSTpDKTHx+4iYXXM8AICSRv0EBABDZ3tvpd4IptUdC0bCHElHK7XTcH/dwQDSfxoI3UKpl5+tstfWYTONVpWQxUrVnCYSE38p21sMAGD4SEQAQA+yi/dLNfxW/TF6HpL0FUmfioi76w4G6IXtlZRKUBQlKrZSs7svnSvpHGWJiYi4rOZ4AAAtSEQAQA+yRv0+VnccGJj7lJ6m3qOUSJindMO1u1IbCWX8U9K3JP2QEhAYV1miYmul7kpbh+2Vqn00zS1KbZr8UtLvImJBzfEAwJRGIgIASsoajLtF0pp1x4JKLZb0PUnHSzq7qDi37Y0kPUXS3pKeIemR2ailSgmMn0n6VkT8Y9ABA01me5ZWTE5sp9Qda3tvLnWYK+m3St3mnlqmK1oAQLVIRABASbbfqtTYIMbHeZLeGBGX9DpjlphayJNVoJysy+MttSxB8VhJO2avM2sKa4lS16AnS/olDckCwHCQiACAkmxfofRkD6Pv35I+KOn7EeG6gwGmsqyaxyOVkhI7Snp89rpJDeFcpiwpIelvHB8AYDBIRABACVlRY+r7j77rlHqw+CYlGYBms72Blk9M7CjpUZKmDymE2yWdopSUOCsi5g9pvQAw9khEAEAJth+j1FsGRs88pfYbviPpHJ5wAqMr67no0VqWoNhF0k4afNWO2ZJOkvRjpaTE4gGvDwDGGokIACjB9ipKxfk3rDuWhpkn6WJJN0t6jFLx6mm1RrTM35WSDz+JiAfqDgbAYNierpSY2E3Sk7LXR2hw17l3STpBKSnxJ5KbANA7EhEAUJLtD0n6cN1xNMQDSt2YfjEiFk68aXs7SR+V9NKa4rpH0rGSvtNPA5QAxoPtdSXtqmXJiV0lrTuAVd0k6adKCc+LBrB8ABhLJCIAoKSsQbVTJO1bdyw1u0jS8yLilqIJbL9K0jclrTqEeJZKOl2p9MMvWxMjADDB9iO1fKmJx0laucJVXCHpJ0pJiWsrXC4AjB0SEQDQA9trSPqjUt3kqejXkg6MiLndJrS9i6QTJW02oFhukPRdSd+LiH8PaB0AxpTtmUrtSzxV0tMkPUXSGhUt/u9KSYnjIuLWipYJAACAqcr2BrYv9dTzVadSIb18VhvZPrnCGObZ/pHtvWyTTAdQGdvTbT/J9rtt/8b2nAqOWUts/872wU6JDwAAAKA/TjfYl1dwkToK5to+dJKf14G2b59EDOfbfpPttSv6CgGgI6fExG6232n717ZnT/JYep/tL9vese5tA4C68TQJAPpke2NJZ0varuZQBukiSS+LiKsmuyDbK0vaW9IBSnW015Y0S/lFoe+T9FdJ50o6NSL+Odn1A8BkOJUI20nS07NhD0lr9bm4f0g6Rqk9iTlVxAcAo4REBABMgu2HSTpH0rZ1x1KxOZK+IOnjEbFgkCty6npvVjYskHT3oNcJAJOVJSaeoJRg3UepjYleG7+cK+k4ScdExF+rjRAAmotEBABMklNL7BdKWq3uWCrwoKQvS/p0RNxTdzAAMCqcGjOeSEo8W9LWPS7iEknfknRsRNxXcXgA0CgkIgCgT7YfLunNkl6tVM1gVC1RqgJxkqQfRcRdNccDACPP9nZKCYl9lKpylG2scr6knyuVkjhnMNEBQL1IRABAD7LGEl8s6eWS9tLoHkfnSzpdKflwSkTcXXM8ADC2bK+q1E3oPtnwqJKzXiPp65K+HREPDCg8ABi6Ub2ABoChyS4gnyfpFZL2lTSj3oj6dpukM5WSD7+NiAdrjgcApiTbW2hZUmJvdW/0cq6k70k6OiKuHWx0ADB4JCIAIEfWCNnekg6S9EL13zJ6XW6QdIFS2xUXSLowIm6vNyQAQDvbq0j6L6VzzX6SNukw+VJJv5b0hYg4awjhAcBAkIgAgBa2nyjplZJeKmnjmsMpY4mkq9SScFBKOtxfa1QAgJ7ZDkm7KSUlXijpER0mv0TS0Upt+8wfQngAUBkSEQCmPNubKiUfDlH5ert1WCjpUi1f0uHiiHio1qgAAANh+9FKCYn9Je1SMNldkr4h6SuUfAMAAGgw2zNtH2T7t7aXuJketH267ffafrLtXvunBwCMCdub2X6L7bNsL8o5ZyywfaztneqOFQAAABnbYXtP29+y/cAQEgm9etD2GbbfZ/spJvEAAMhhe13bB9v+RXbuaPdH2y+0Pa3uWAEAAKYk21vb/pDt64aQTOjFQ7bPtP1+23s4NVgGAEBptle1/WzbX7B9Zdt55nLbh9ieXnecAAAAY8/2mrYPs32O7aXDySt09ZBTkdoPOJXMIPEAAKiUU/L9jbZPtj0nO//cYPtNTt1RA0DtaKwSwNhwKoK6t1Kjky+UtFq9EWmxpD9JOkvS2ZL+GhELao0IADBlZAnvPSTtK2kfSetJ+pykr0fE3DpjAzC1kYgAMPJsb6+UfHilpM1qDudWSb/JhjMj4oGa4wEAQFIqLSFpP6XkxIWSvhYR99UbFYCpiEQEgJFke11JL1NKQOxaYyiLJZ2nLPkQERfXGAsAAKXYXkfSnpLmSfpnRNxZc0gAphASEQBGhlNjW89RSj48T1JdbSzcIuk0peTDGRExu6Y4AACYNNtbSJoh6U5K8gEYBhIRABrP9o6SDpV0kKQNawiBUg8AgLGXtSnhiFhUdywAxhuJCACNZHstpcTDayXtXEMIt0n6lZa19UCpBwAAAAAAxo3tJ9v+ru25Q+hOs93NTv2wP8U2iVoAAAAAAMaR7fVtH2H7shqSD/+2/XmnBAjJBwAAAAAAxpHtsP1M28fZXjDk5MNNtj9ne3eSDwAAAMBwcQEOYKhsbyrp1ZIOk7T1EFd9k6SfSTpB0l8jwkNcNwAAAAAAGCbbu9k+3vbiIZZ8+Jftz2TrJvEKAAAAAMA4sz3N9gttnzvE5MONtj9te9e6tx8AAAAAAAyB7dVsv9n2NUNKPtxg+1O2n1j3tgMAAAAAgCGxvbHtj9m+ZwjJh+ttH2V7l7q3GwAAAAAADJHtx9j+ju35A04+XGf7k7Z3rnubAQAAAADAkNl+hu3TBpx8uMOpzQeSDwAAAAAATEW2n2377wNMPiyx/WvbL7K9ct3bCwAAAAAAamB7T9t/GGAC4l+2P2R787q3FQAAAAAA1MT2Lh5cFYyFtn/mVMpiWt3bCgAAAAAAamL7sbZPHFAC4grb77C9Qd3bCQAAAAAAamR7W9s/cmqroUoP2f6+7T3q3kYAAAAAAFAz25vbPsb2oooTEBfYfqPtWXVvIwAAAAAAqJntDW0fbXt+hcmH+21/1fZOdW8fAAAAAABoANsrO7XT8ECFCYg/2j7E9mp1bx8AAAAAAGgI28+1fVVFyYc7bX/G9vZ1bxcAAAAAAGgQ29vb/k0FyYcltn9r+wDbK9e9XQAAAAAAoEFsz7L9edsLJ5mAuM32R2xvWfc2AQAAAACAhrE9zfbrnapPTMbltl9je0bd2wQAAAAAABrI9lNtXzjJBMTvndqTiLq3BwAAAAAANJDtLWwfN4nkwyLbP7G9c93bAgAAAAAAGsr2dNvvsv1QnwmIOU7tSND+AwAAAAAAKGZ7J9sX9JmAuCVLYKxd93YAAAAAAIAGsz3T9qdsL+4jAXGx7UNM95sAAAAAAKAb2/9l+5o+EhBn2H523fEDAAAAAIARYHtt29/uMfmw0PaxtnesO34AAAAAADAibB9g+7YeEhAP2P6M7c3qjh0AAAAAAIwI2w+zfWIPCYibbB9pe626YwcAAAAAACPCdth+g+37SyYgLrT9CtvT644dAAAAAACMENub2j6zZALiN7b3rjtmAAAAAAAwgmy/2PY9XZIPS22fYHuHuuMFAAAAAAAjyPYatr9TogTEqbafUHe8AAAAAABgRNnezfY1XRIQZ9h+Ut2xAgAAAACAEWV7JdsftL2oQwLij7afVnesAAAAAABghNne2va5HRIQf7e9T91xAgAAAACAEWf7VbYfKEhAXGx7/7pjBAAAAAAAI8722rZ/UpCAuNL2y2xH3QNrP3oAACAASURBVHECAAAAAIARZ/vJtv+Vk4C43vahtleqO0YAAAAAADAGbL/F9sK2BMTNtt9ge+W64wMAAAAAAGPA9kzb329LQNxh+222V607PgAAAAAAMCacesW4sCUBca/t99heve7YAAAAAADAGLH9bNv3ZAmI2bY/YntW3XEBAAAAAIAxYjtsv9f2EtsP2j7K9np1xwUAAAAAAMaM7TVt/8L2fNtH296o7pgAAAAAAMAYsv0o25faPsb25nXHAwAAAAAAxpTtF9r+tu3t6o4FAAAAAACMKdsr2X6p7V3qjgUAAAAAAIyxrD2IJ9meXncsAAAAAABgjNmeZnutuuMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAC2Z9neqe44JMn2erZ3qDsOAAAAAAAwGNMlHSjpG7bPlvTxiDhzmAHYnibpUZIOl/QaSRdK2mOYMaBZbD9e0uURsbDuWEaR7ZUlzcr+nRMRC+qMBxgU21tL2kXpHLKepHWyYSVJ92TD3S3DRRFxbT3RNoPtXSRdEBFL644Fw2P7qZJ2jojP1x0LMG6y/WuniPhC3bEMmu2VJK0laWVJcyPioZpDQgPY3kLScyVtI2lzSatLulrS5ZKukHRxRMxtn296NrEkPV3S020vlfSgpLnZ0Pr3XEn93ByulK1retvfsyQ9RtJqLdP+vY/l9832lpJ+n8U1T9JDOa8rSZopadXstXWYoZTA+XKJdb1E0tFKn+FDbcM8SfOz5bUuv3Wd8yXtHRE3TX7Le2P7GKUf2Ly2YX7L30tKLGolpR/natlr+98zs2meK+nXlW7EiLK9uqQts2GLbNhIaf/JG2a2zb9I0hylm7K/SDpH0jmjdENme3Ol38M6yv/tTfy/qtLvaI2W15mS3hURxw4/8iRLuG4sabOWYWNJa2bDGtnQ+vfE/zMlLVA6/s5peb1T0qWSLpZ0iaSrI6LMPjiyss9xH0mvlfRUpeRDr8u4QtLJ2fCXJtyQ2z5eKQHffnxtHcrEOXF8zTu2rpYN0yTtrnQsGDjbP5W0p9J57sFsmPh7npbts+3xnhsRB2bL2ETSmUr7ROt+MFdpv5/Y11uHSyQ9NyJseyNJ5ypdd7TOO0fSYi3bDyeGaZL2iYirbG8q6TSlY+tE/HNb/g4tO960Dncqna/vr+qz7JftF0j6qaTbJTUqEdHy3ayiZb+Nh1r+XqRlv9324Ualz7hjst32j5WucVt/exPDfKVj7MSxd+L1vIh4WWUbOqJsr6d0vto8GzaVtIGWJX3Xbfl7LaXP9K5suDt7vVPSbyLi7CGHPxS295f0E0m3SRq5RITtVbTs2nLiOnMTSWsr/xpzjbb5lygdEx9Qeph8TjZc1ITzayfZteVZSueG2dkwp+XvievKVZXOC8dFxKmTXOfLJX1OK17Dtg7TtPz5cOL8uFTSvhFx1WRiqJLtF0t6h6TdlM6HRWbb/qykzy2XkLD9ZTfLiwb7ka3I9utt/7OPWOfY/qLTibTMeta3/UHbF/e4nsW2T7Nd20nR9mNs/zyLZRieXte2NoXtR9i+cYCf8R+dsvgjwfab3Pt+er3t99tes6aYX2n7JtuLKv3m8s2zfbLtA2zPqGN7B8X2hrbfk32fee6yfa3tBT1+Zn+zvVUDtm9n27+yvaSfL74POw5x255l+089xneC7Se2Ledwp++5m6W2T7H95Lb5n+N0DuvmXtv/65T0mpj37bbv7CH+K20fOqSPuCPb+3vZeXupU2K7UWw/2/aZPXy+C23/wvZ/lVz+3rZPz7a/jDM9xH2kSWyvYfs421fZfrCH76SMi22/zvZq3SMZDbZf6OX3r5HZNtszbZ/r8vtFr651ugaa1j2a+tg+0PYZLnf+/ZdTiZDJrG9N20c6XYP3cs6/1/YbqtruybK9ru2f9BD/hH/Yntm6oB/1sZBB2qDGD/XJtn9YIsaltt9pe1b3pRaua3uni5VuznbJRMcw2N7c9ic8+AvmRrRbUjfbT7f9Nttfcbow6OYk2x+1/VPb17jcCeZEN/DitIjTfnpTl21aYPtVtjtlZ4cR64a232X7dy5/k3yJ7WNtf9IpcXm003H6t7YvLfmd3uf0m6nteFoF23s4/ZYXtG3bp22/wvauttdpmX6a7c1s72n7YNsft31rl8/qa3VuYyvb22Tf96BtVcO2PcP25SVie2GHZWxh++9d5j+gSxxv7DDvT2xvWDDfmraP77LuC2y/yDUfdybYfoLtuW0x7lJ3XEVsv8DpAU8n/7T98D6Xv59TwrbIObafVvV2jRrbhzjdmJU9Z13ltO8cm30/3ea7zW2JwlHktH+1J2t2rjuuXth+rFOS97O2zyvxXf/V9sdsf9v2hU5JwW4udqpG2Wi2N3W6Zui2Ta+qeJ0/7rK+Jba/6lQ6qRFs7+tl11aLnK5b9rf9SNtPs32E0/100cODV7Qu7Nc5E1xl+wdOF8Jvdbqge7nTk7YX2H6e01PGIhc5XSTun813mO23ON28f8kpM/3vnPlur/Fz/Y/sC+/kWxWtZ3N3fuJ9kxv0w2tl+w1dPqNP2j7I6SnUc2w/1+kC7eW2X+2UDfy+00krL6nR14XGuLP9/C6/l2ibfpbT06BuF+9/cssNXdPZfrg7nyzeXXeM7ZyeNO3nlCAqcqG7PD2wvYFTBv+b7v6E+C7brxzWNlbF9gync0Wre5zOO2v1sazXujjx++1BbUe/bL+3w3e6xPaHbb/MKx5fD3I6vr7T6SKgKHFVy75ue213TkZcUWIZM5z2kyKP6DL/VjnzLLK9X4l1b1iwzqW2j+jlsxgG2+fnxPq/dcfVie1nunOy9chJLv/3OcucY3ufqrZhXNhe3ema4w8dvo9LvOJ1x8pOpbw6zbfAJUu0NJVT4rHdO+qOazJsP9r2HR2+ty3app9hexenBwad3GL7sXVtVy9sP96p9EGR+1xxMt/pxr3I+6pc12TZ/kBLbDe5w4Nj2xvbPitnm17aOtGfW0acZnubHoK5ueBDK3VCdsqa/K1lvivLrnuQnHasKzr8KDapcF37dljPN6paT9Vsh+0bCuI+v8dl7eEVn3CvP6jYR52LkwoXdJhnZdtHufMF3s+GuR2T5c6llxr7+3F6AlHkIz0ua3Xb77Z9d4dl2qmkzCqD2qYq2d7WK95A/ciTrF7jdMx6jVesJvP/qoq9Kk77a9F32lOD0k7F3tsvLCdVtHQynC50i0rUlWr/yOlhSJHXdpk375z7oZLrzUtELLV9SJn5h8mpSkye8+qOrRunKq9FJtXWj1c8fy62vW9VsY8jpyT6/QXfx6c6zDfNKSlaVELiX+4xsdwUTsfVPOfWHdtkuXOpvFU7zHeIO5doutatRfIbrMP3O+HPTg3DV7W+lZySeu0ucYOqtjiVNG713BLzTLP9kbb5dmidYOIp0dm9/kBs/6XgC3pdD8tY3cuebgyl8awybH+3YNsq7YHA9iYF67HtN1e5rqrZ/lpB3N/vY1nrOtVVm1DZDj5ubL+v4HP/Q4l593bnoqkjc0HmVOUhz311x9aNi28y397n8ta0/Y0O36ud6t035oSWx+kp/+y2uL9TZdxOJftaS9O8raplV8mpnnaenhtDc3oqMXGenTOIeHuMp1O90lJdeHv5hyitOt6oesUnT3+zPb3kOp+Rs77GlaiRJKfqYHmW2t647vg6caq7XlRyZr4Lqs+UWO7mOcs7vOr4x5HzS0/bJZLnLj5X261FtEeI80vW2CnJ2pjq1P2wvVfBti0qMe+2TgmHIv83jG2ogvMTA62+UvH6PpyzjvdWuY7JsL2d0/F3wu97nP9bLfP+5xg+Taml24ckHRAR83qMq+hHWXo5EfGgpIkPukk3EP8ueP+uKlcSEbcp9WaQ55Iq1zUARRe083tdUETcq2W/g3kR0fWAN4UV/V4e7DZjRJwl6agOk7ylr4jqUXScuWOoUfSn6Lvqed+RpIiYExGHS3qbinuvOUBSpSfOKtl+q1LL460lH74t6TVVtrwdET+T9PKWt5r6e6ny+Hq7pIkbhgf6jqg6/6fiXkC6PmHJfKDg/b3cucTHE1r+nifp4IhYXHKdL277/wFJ7yk579DY3lVSUbH3kPSCIYbTs+xa9FXKv8acIalUCZYcb237/9MR0diSpw1zb8H7ZY5HX5B0fcG4kWkwe4Lt3ZR6YckzTQ3fv0qYzDXmtZLe1GGSw10y8dsAP+0y/k3uUgKvRxflvNek3gM/rnT8ndBrL5dHKPUsY7UcT6YpdcXynYi4u4+gim4We+pTNiJ+I+kPkv7VRwyDUpSIuHMA67q54P2iA39TFH3PfZUaiYg/KO2ITbhQbrKiG5QV+uctcJRSt2d5nuXRabiyKBHRiLZmuijad3pNBi8nIo6W9FKlA32eN7hDY4B1sb2HpM+2vf1vSW+NiKJt6VtE/Fypf2tpMMf0KlR6fFXqrvQGpS7JahURl0s6oWB0qURERJwp6a85ox4mKbf3Lac2l1qTCe+JiFJVQrPkxv5tb38oIpr4++lWPbZ9OxonIs6X9NGC0Ye7ZMmZCU7V9VpvkM6Q9K4+w5uKiq4vuiYisu5Vi5JHo9g46MjvX11M6hozIk6XdFLB6A2UuqoeBUX3ga2+4uoaXs17+FyUwBsqpzYx2hPxl/eyjIiYLelnkh5oTf5Pk3SkpA/3GdukS0S02EdSkxqYK0oOVFoiIlN0YVlpNZABKLpQ7uupbub9ks6exPxTwWRPEvNUfCKdrtSH9Cgo+p1N2USEJEXELyR9psMkR7lBVZ+ciokfL6k9pnf3UUqvFxM3wk28kZQqPr5mpUrer5T0b4KiUhG7u3zR+88XvF/UoOHhkiaqoF4q6csl1yOla5TWKg2XqoEljLL9aSIRc5FSAqrdXh6NuvlHSbom5/2VlJ6y9+JISRNJ9nslHTqIJOcY6zsRkclLGkrSI7uUYGqUbP+aSOZfqPz9a2/X1GV4RSb7sEtKpTOLfhuj0hj9/SWmWUXSz21vWsH62msFzM5u3psgr7elfnqO/IzazrvTIuIrEVFUDKebyhIRETEvIsp86cNStA2DSEQUrWvKJSIi4ldKRTJRrOjA1Mt+d7KKv6fNewunNkXb27X4YAMUxVjVjfd7Jf25YNwj1Lno5NBkRTSPl9TeAPCfI+LHA179tyRdIOmqAa+nX4M4vv5YDal+FRGXSfp5zqiVJB1WcjE/V/5Tq91sP6X1jey31vq7f0dEFFVjytPe9tVbe6jSMUyv1bKk3nskfT1nmlUkPWdoEfUpq6JZ1MvHXrZzS760y0rCtP7u3xARt042vilmstUJb5C0MOf9u3rcD+v2Oi2/f+VV7RmJ/auDSV9jRsS/JP2tYPSoXGO2JgbmqLiUx8aSfmF7RsH4sto/9zIlMoZlx5z3eu4KOiJuiojlqlVOtgGwSqpmNFTeAVOq7kahVdGBfFQTEZOKu6EXd00y6cbmshN/UZHkUa+aUVl7AgM0iNJE/5HtQ50avuyrUcwBeIukPXPez7t5qlRE3BgRO0dE0bG+blPh+FpUIuF1busSME+2LUXLaC8V8RJJE0+tfhsRvy0XYmpUWstXGTk+Is4uO/+wZE+WX5/9e4Ok30o6S/nVHRtXRStPRPxSaRvyfMYdWvFv8XZJa2R/HxsRRdWCUGxSJSKyfTWvV5y8Ei+N1LZ/XS/pdElnaoT3rzxZVZoq2mm7rOD91SpY9jC0Phy/RNKBkv5YMO2uyk9KlZbtI63XtaV6kRqSx+e8t3MVCx5UImKQxWmHpWjbBtGIYtGBvJKbkgEqulBu0oXuOKqq1ftLC96/oaLlD1rR/jHKiYjKjp0R8VdJRV31bWn70VWtqx/ZjWZeyQwrXeBNdWN/fM3aBboiZ9Q2kp5VcjHfVP7T2hfY3rbl///JXpdIekfpIJNDlaqtKVtXr/MPy/O07GnjMRHhLNF2Ss60+1bwBG9Y3q78Rni3VnE1HEmS7XW0rJHKG9WQEkEjqIpSfHlVrhrZ60yB50vaLPu7df86NWfa53hEuswuUMV1ZtE15o0VLHsYWo85i7Lv+kUqvkY+xPb/FIwrq/Vzb1KJiLxqGNvb3nuyCyYRUWyYiYiiG6dRLRGBweqlnl4nRQ3NXFfR8gdtHEtEVH3sbG8AslXdRUf3Vqom0u7irJeHqW6qHF+PKXj/DWVmzqp0fi9n1DSlesqy/SRJu2Xvfzciii6QV5AlzFpbRv9kRDTpArHVG7PXRZK+0/L+L3KmXVNpH2y8iLhEqSpVnvd0qZ/9IUlrKZ0XDm5QnetRM6kSEVlSsL1dktMkDboKXpXGcv8qUMV1ZlGJiFG5xmy1WJKyjh2er+JEzWds7zWJ9bQen5rUk2Te/UJI+mEPbTrlompGsaLiusN8GtXUIsMTxiHhNIqqamBr/Zz3zo2IqkpcDFrRBdAo1DcddBsRE36l4s/p2RWvq1dFN5qli8yPualyfP2+8n+jz+uhAbCjlX9cPDRrXG6iBMNcFXf7WWQvpRIaUiqqe3SP8w+F7YdrWSmSkyKitVva05R/zBml4uMfUH4R+NUlfSpvBtuP07ISEJ+OiKJi1eiu6Ma07PVIe8mVYyQ9P6sG0HhZIuWZ2b8ntvWWc5ry73tGaf9qV8V15gY5782WdG4Fyx62/1xXZu0bvUz5D72mSzo+62WiH62JiCbdSxcl7zdWaqyzvZ2v0gaViBiJA0ufBlEiokjTW3SutFFA22uMUP/C4yCvoZmvDj2K/o1yiYii2Cu9+cyKEhY1GFVby9XZSauor/V/DjOWBqv6+DqrTLsLwxYR9yq/0crpWr4kQqdlXKP84tGrKzXaOtHt2Kf6KG3TGsNXG5yofaPSEyqpra5y1vvMb3Lm2c/2ZK8DhyIi7pL0sYLRB7V3oZf91r+q1PjptSruPhLl9H08sv1+LUs8L1HqNvf1DWuvpptO+9dDGvH9a0DyrjF/EBGj0KB4u+V+qxHxaxU3pLuepN/YXreP9bSeX5r0MOIcFV9b7yHpMtsH97PgqbyDNEnek+lRUNmTZ9sbKHWF9PSqloli2UXaE9re/qNSH7+jYpQTEUUGcWFW9PRhUsXpJmk3Latz3+7uYQbSYFUeXzdXKia7U1XLrFhRI1+v7aFrv6KuPLfKXm9R56pKK8h6W5h4qjlfzS0NsaqkV2f/XivpdzmT5SV7NpT05Jz3m+qLStuXO64t0XaIpImeU/5nVJ68N1hRiYjCxkJtr2v7q0pd9Uqph6InRsQnqw5ukLL969Ds32sk/T5nsrz9ayNJuw8orFHQ3pjhbHXuWrzJVjgfR8TnVNzGyfaSTrE9s2B8kdYSEY1JRGTV4zo9qFxH0vdtn2/7sF62m0RE7x6bPVma0evTJdthe6btdWxvYntr28+W9LgBxVqXrcpMZHt12ztljbtcLmlbjUax+nHwOqU6jBMuk7Rf1l3aqBjlhMMwXVDw/up9nCSrslWHcSQiOtuqzES217T9RNvvVGrxe1M19PiaFZnPq4O6mVIDjGWW8Xt1Lk3ziezJZS8OljTRoON324pjN8mBkiaevn0zIvJKU/5K+aVVR6b4eFbCq+gp5M7KkjG215Z0VPb+qdnTS0xO0fn2ANu72N7Q9na2n2r7QNs/lnSrlrWrIKUG756eNSA6Sl6m7vvXqRrx/atKtnfRij1ivTHr1nMUFT0keqOkPxSMe7Kkn/aQTJcamojIvFfSzV2m2UkpOXOL7S8MvFF028c433oDXfEQ2H50wba1W2z7Idv3277T9s22b8yGm7L3ZtteWHJ5rRpXjLaV7d06xH6n7b/Z/kv2erHtq2z/y/Yd2ee1NGe+nvulnWqcklh5SlWrsP0k2wta5vu37c26z9kstrco+By+UHds3TgdoPNsMYB1Pa1oJx3E+krGVLT9tcXUNLb37fAZ3e4Vj69Xe9k554GC+WqrjtON7bcVxJxX5LloGYd2+My27yOmy7J5F9veutf5hyX7Hdj2fNuFJSxtn5Lzudzq3i6Ua2f7rILv+HanBz0T16bzm/ybHyW2d++wb/XqIdvftv2wurerDNt/bfk9Fd7f2D41Z1tv8YjtX5LkdA/T7sKS827gdC6asNB2qWp2TeLl7wPzGiSdmG5929d1+L2X7tbT9tda5juomi2pju3H2r6yw7bmOc/2qwayH5hExKCNciKiX9vVvV1N5+JExPe6zLeK7Tc53ahMONnlG4RrFJOIKLuuHTrsbxtVvb6SMZ3YIaZR6WN8oNw5EdGvOqvjdOR0AzkvJ+YlXr4bzk7LmOF0M5qnvSpat2U9uWXen/S3VYPnVKpwQsceCFycqKm7B52e2H5c9rvIc0/L30VtSqBHrjYRMeFOp1LBjWV755Z4f9Rl2lcXbOe+w4q3Ks5PRFxVYr7n2760ZZ6LbT9xGDFXzSUTES3TFj0AsO1SbdTYPqplnv2r2ZJqOZW2/GmHbS3yD+c8bKZhQDRNVV1TTkXPtv02pZbFFyo1rLpYqV/5Ryh1OdR6o/uhiPjo0KPEsN1T8P58SXUVNd+qpvVOdU1taFERcZ/tn0l6ZduoaZKOkPSmEstY4FQy7CM5o9+lVMS6rNZeXY4qnKp+rUXfuz15O1npnNB+7fdqSSNTfSEiLrb9baUqhu0mitDfJOn/DS+qKevnSl1Z3qt07bGOUjWwh0s6QCu2E9BqA6VG/Y6MiKI2XurWy/71SxXvX6VLdjXYNrY/rLRvLVK6zlyo1NbMI5TaeGv9vk+WdMCIVfntS0Rcbvtlkk5RaiC33Ydt3xoRRd1VT2hqY5X/kTXY/DLbJypVleu0j7faWdJfs3P0kVlVOxIRfbhN6aLkX1q2E7YPi5R6vJgmaeUuw9aSPi6prrrag/AXpe7S7mp5by2lg1Xr8Bil7sZa2ypp7IXyCNhYxQ225bmr+yQYA0XF4f5dUNd1GGZ0GLehpBuHFMcoOkPSB5Uu/CfM0orH1x2Vup6cKFm3JOs9ocm+oRUTEVLqhvNDWc8J3Zyg/ETEAba3jYiixg7/w6nrtZdn//42Ii4qsd6hsz1L0kTx3esi4pxO00fEvbYv0YoNFe9ne72IKEpaNtH7lRJLaxaM/3wfbYKgd8dERFGXy5+0/Silffq/Ja2RM01IOsr2mVmDeI3h1NbIxHHg2ogoagtA0n/2r0slPb5t1H621816CBpl09Vb7zMPjHgSoqd2FCPiN7b/V9LnCib5mu07IuLkDotpvSZrZJtOEyLiOEnH2X6a0sOC56n7ZzZNqUvlyF5JRPTh1xFRacvZtl+oFRt1GWWnRsR5ZSZ0qnd7sqTHZm9RImJ43mH72xNZSYytoqpydTYadYekRxWMm1QiwqmY+d5KTxPmZ8O8ttfFklZT6t5xjex19WwRx0RE3+sfgpMi4i9lJnRqF+FUpaeTjU/yRsS5ti+X1N7A1Uyli5YyF8FF1ZtWUnp6c3iJZbxTy66Pmlwa4hCl37GUuiktY3bOe6soJTS+VEVQwxARd9o+VvklZRZIOnbIISFHRFwh6X22vyPpp8rv0nFlSd+2vXtENOnmq6r9a4bS/vXlKoIaIQfa/nBEXF93IH3q9MAkV0R83qmBxrw2MVZSarxy74go+3tqvCwBfo5TezxvUSoBNKvLbG+2fV5E/IRERO8GUZR53FqJL90FYUTc4FR/7gZJCyKCnhD6N1vScUpPSu+XdJ/Sd7GHlnU91WobpeLHXxxSfKhHUxMRRSbbjsG2kl6q1ONCr25Uulhusl6Or1fafr5SrziNT0Rkvikpr52XN9s+qsRT7g90GHdIdmF8W9EEtjeRdFj279+y3jiaqrXY+IG2d5D0oKSHsmG+UqJtVjasJWmTgmUdphFKRGR+oPxExKUjVrpj7EXEdU7tQfxFqRh/uydK2k/SiUMNrLO8/eshFe9fs5RKpuY5TKOfiFgq6XilrpAnrjEfVDrn/q9SQrPVKkolvl+u0dRzIiLzJqXf+NNyxs1U6tZzj4i4su/IGigirpP0dtsfUEpGfFTS2h1mOcZ2Uffy5bi4scoNJrXgBnBxY5UfH8C6flGwrlFtrPJdfSzrRNuFF4dYxsWNVRY2VGb7hIJ57rK91jDjr4pHu7HKowtiH0RjlQcWrKvTDdtA2f5iQUy2fURF69jR9vucegUo44NO/cU3gosbq3x9H8s626mkQeO5uNFK235Ll3mfV+J7/lSXZXy2ZdoXVbt11bG9V6lfdW/ai5Q3mu11C7bj53XHNm5c3FhlT41NOh2Xi/zfoOLvle29J7EfFdmx7u0qy/mNVd7YYfojC7Z5qUe0Nzzb/9WyHR0bq8yZdz3b13b4LdzolPRun+99LdM8o7qtGT7bm9k+o8s+8cqe6r/kKMoW9ZtFwvIanYio2JckXVN3ECMur0jghMO1fJ3yCeuruF/2pis6fo3CftP+5GCQirpI++UQY2h3U4dxz6piBRHxz4j4uNKTie92mfz7EfHRiJhfxbob6GhJXdtGaIKIuE+pnYc8R7igCzDb07SsccKblBqnzPMGp7rfectYT8uqblwt6aRSQdfjjd0n6dmrB7DMgcnq3OdVLWx6WyhTVkT8U9LpBaMfN8xYupjy+1eOBzqM+5ykP+W8H2p29bZOWu9le7quzEpkPV/Fn9mWkk5zaudnLEXEzUrXc5/uMNnOk62aUZRwGOZF9qAU/eiGeZOzilLRr6ZavfskH0XBTwAAIABJREFU5UTE72z/sarlTVGF1VqyRpQ+pvxGdI6w/Z2IuGFwoQ1EUSJisgnWYSg6Rg7i+PL0nPf+GBEXD2BdZZ3VYdxTba9aVVIgIh506sN8c0lFTxg+UcW6Klbl8fVE26dWtbwh+IakV+W8v7VSS/zH5Yw7SNIO2d8fVGoj4A3ZPK3WVCo6m9ejwtu17HP/dFOrCmZP0lq7drtC0vVasT2UJUptXbQPOyg1ZtruFbb/d8TaDVqo8bjmHFX9nLN+pPyEcyMSEbYfJukFLW+1718T+1jR/vU45W/LxP41qg04drrGtO0jld+Wxl6294+IJid287Te4/bcrXhEXOHUk8apym80/HGSTrS9z4gdc0vLfhfvkbS7UjXxdjtNagW2TyooalHUCNnIsL1rwbZVXuzbqVpCnkYXmbe9X0Hc7687tnHm4qoZX+0y3youLir2eze8KlA729v28zk0ge1jC2LPqzs7mfWsZPv+nPW8pMr19BlbpyoTlfctb/uADutbv+r1TZbtQwpifXPdsQ2Dl++LvtU/cqZdxfb12fiLnUpHyPa7CpZxh+2ZbcuY5WX7yi22G3tz61SNaMKvbK/c4/yrOVXLy/PiQcU9CLbn5GzDD+uOa9y4uGpGz9WXbD+lYFl1dSe9HNsfaonp1D73r7ur+rzq4PyqGReWmO+nBdt9u1OJs5Fh+6Ut8ZdqgL9gOf9T8JlM+Kmz62+PUdWMVk5VqWfnbPv9VM0oVtQlVNH7k1FUL7npn2NeV0wSTycGra+uXrOMa1Fx5acr60pnhBQdv4q6q/z/7d15uCRVff/xz1cWgQEVRBEVRNA4RMAICi4YoiCCDpsQ0RgUI8aY+HPDnxLEiFvELa6RKIkKuKM4siiMskhERQFFh01RcQRRdoZhYGBmPvnjVHOra7qqu6uru+veeb+ep5/bfbrq1Km6Xdu3ztImZRc2Te/zT9WavRdfp3Z0CHZWxXfjuNmuGtqwqlnTtKztx9fPlKTvYvs5hbRXa6bmw1G5mgyfVRpBoejhmumQsuNfNLOvfLStT6hsrysp30/I8cM+Yc06/Cxr/jLbq49jPMpqUNepuVXWUfLVNfJqVLZ/vSqXtLbuX7WuMyUdpd7H3C00+zrrzJ9ry87HfWUjLZadzyTpUEkf6ZE+VACszSJiiaReHVMuHVcgYi5cKJX96AhEzCjbRm0v92xX9hvsuz9HxDfU+2AgpTG/t6tdqsmbi00zmt53XtQj7cMRMfDIC2NU1fnTfm6+g6tb1Ltq6YqW3nSu7cfXk1Te1v/+fm1sbyypUwvv/Ij4due7iLhJ0tdL8nhzdtMh2xspNcuQUm/w/zVCucdtP0mPyt4vVXl7+37KbpT2cY9O1LDWK+v9vk4gomxkpDaMIrC/ZvavOyR9t2Y+ZfvXvrbLRtZok17XmYNcY16r8tF3XuzZVeMqf66tHYjIvFZS1QhMr7d9tLrvB1t1L+2spuEILumRdjU1Isq1oUZEq36EPZSdgNpe7tlu1N/mkZLcI30jSSfZni37b1nNh9lQI2LsgQjbj9aaHW59XanjwqmLiDMk/bRiknc2vLzVSjeZRW2sDSGt5TUiIuJ2Vd8sd/qDeKNmbmx61fg6viSPbZSeREmpRkWnec7xEdHmoU7zw1WePkIQ7QL1Ho58HUkvq5nnNPS6jl0r9pEJ27QkvU4g4i9L0tsQiGhq//q+pJt6pLd+/3LqELhXjYhBrzHfqxT47+X47NpkNsg3jx8pEJHVqjlE1Z1Gv1fdnce35jhm+2Pq3a/SMAhEDGmSNSJm63Yc64WyUx8As2a4owkq+w0O1KdIRPxEvTt7k6RnSPpiA5HPSSgr46id8E7CJGpEvEPdQc7LJB0eEb2CUNNyVMV3z7fdq0bHKHpdVLa1Q+BxH193sP0XTeQ1Rp+u+O4TtneS9Obs82nZsa1LRFwo6ZcleRxjexvNBDBWqCWBul5sP0HSnrmk2sNURsQqlTfRmhXVx7MaLb06kWv7tdNsVFYjYuhO/CQ9sUfacklfqZFXY2zPl5Rv9rW27l+jXmPervIHCQ+TtMj2ZnUKNmFb5d6PWiOiM8pP1UgaUvexqxXHMdtbKAXrDxkxq141Ui8c9Waj7MfamijOCNpQI6KxXtPHZGxVh7OOWxZKOnzUvOagkU4SmbdKuq3ku4Mltb7DR5U/odlioqWop+zirexYMBTbz1L3vnOzpAMj4q4m8m9KRJyr6qqvn81uNsepblvYcRvn8XU9SWdKevGoeY1TRPxQ0uKSr/dQesLSOe5VPa0pqxUxX9IvNHPMOCki/jxsOSfoWM2MUrBM0ndGzK+s2coTbD99xLwnoeyc14oL+Dlm3DUiPhAR19fIq0nHqnv/qurHaBBl+9d8208bMe9xauL+53hJl5Z8t72kM223/R4nX3Njo+yGfCQRcZVSk9lVA0zelnvp1ygdU7cbcRsUH3xcK+mUUQMRZePTz4WTwCRrRJQta9sxLKtJZeUeOXIo6YVKUfPZNqTkJJRdfA3828w6jnmJyodjerXtdw9bsAkra2e6VUl6m2xTkj5ylcWsb4UzNFMz5PeS9s7abrbRqySV3fzNUxreqqlRLXodm9p6MVRWriaOry+XtLVmx/G1qpOvzm/8nIi4qGK6L0gqa27ROW6ulvShIcs2MbZ31kxTEkk6t4Ehbs9TClL20vantlL5ubDOU3pUa6SPiOz89PxC8nWSPlinUE3J9q98DbxzGtq/ypootHn/Ktuv1rc90MOSrB+qF6r8+PI0Sd/wkCOSTFjxWrKR4FFELNJMn0RVph6IyJpq/1Mu6e9GyK4YiPhgRKysHYhwGlqy7IJoLpwEmnjq3JfTEGJlNx+Pa3JZY1D2/9+1gbzflv2dDRfKk1b22yy7Me8pIs6WdHTFJMfYft0weU5Y2fq2uv1hdmAvC+KOFHy0/VRJZ2vmOPU9SU+JiL7Dbk1LRPxeacz2so4Jt5X0Y9tl7YoHknUQ1uuYtaHbOXTtWI6vWXX2f80+zobj68kq/210VLZdzfp86Dek47ci4lfDFGzC3qeZp7VSamo1kqz6+MKSrw91y4cQV/nN8RNbuk/PZiPXiMhuYk9Ud/PJGyQdkI00MU3Hqfn9a6XK968X2x7Hg80mVJVr4OvM7Nz+IkllnWM/T9KJLd5Xi9eSjdViiYhPqH+nyFMPRCiN0JSvBXFcdp05lOxcsl8u6edKo1rVZ/tJFWOillWDnDVsf6Zk3e51YfzxEZfzVxXbsdVjYdteVFH2R/XPoTTfo3L57NBkmecC25+q2O5D38ja/mpFfqttjxIBHRvbx1aUu7UX0LbnV5S7VlVQ24+2/Vnbq3J5vd+p06lZwfYh2e+tzFLb+/XPqTT/3SvybqKWQaNs/7SkrCtd8wLW9gNsH5fLq/ZxepJsf77if/ejAfPYsSIP295t3OtRl+19e5T3JQ3lvXfFNml1rTjbr68o+xOmXb65xPZZJdv5Sg/Qp5Tth9g+qTDvL21PvQaj7ef3WK9Gmq3Zfl7Fb/RdTSyjabYPqyjz39fI7w0V+dn2x8exHqOwvaXTuTavbMS5ustY1/Y5Fdvlzf1zGS/bF/Qo159tF2s19cvno7n5b3bqm2nkwn24YuPdYLssUt16tje3fVPF+hV7oh9lWUdVLOcOp2HFWsf2rq6+aTjVqeOfQfNb1/aetk8r5NPWatNTYTtsX1Wx3d9RI895ti+ryPNe24ePYXVGYvuLFWVuupPDxtj+z4py2/ZrXPGEIPsNbGl7N9uvs/19dwcgvmt790muU1Ns72f71opts9r2Kba3r5H34RX5tqq9rqtvDm37ZA8RdLS9vu19bH8vl8c9Vb+zNrH99Iptsf8Q+fygJI8Lxln+Udje3vZtPcrcSJDA9hYV2/Yut/SG3uk4eGFF2aua9GAIttezfWfFtv6AS4KjtjezfaTtWwrzfM32gye9Lj3KV7Z/NRIksP2Iiu22rI37l6sDv2fXzPPkijxt+z/cohHbvOa9SMfA55sBl7OZ7V+VLKuqxvJE9Pm/fcp9RkBxurd7s+37snmW2X52EwV7ndNFTJUfuAWRzmE53ZSd0mfdlrqBjpxsP8PpJq9K6zp0sf3Xtn/Xp9x2ujm60Pbptr9k+9NOAaxPOz2FP9v2T5x2wqU95u819NFazfZb+2zze1xjJ7e9rde8UCg6y01EMRvgFAi7r6KsV7mFY3U7BQ9WVZS7427bS2xfbPvbtr/sFHD4re0VJfOcbfsZ017HUdl+jO0f99k+q2yf6HQsGmiUFNsfr8jvmHGv16CcAgZ/HOA3stLpacVpTkG5/3K6mPuM00X+IqdaFb9275uINjdDWIPtX/RYh194iGCK7ZeWbMsF4yx7XU7H5d+WlPkKN3Dh7uoaWrZ9ve1dmlifptje2tVPEjva3A5/1rD9tgG29TLb19i+1PZ5TueuXjf4Zzn1EzF1trdz+bXs5W5m/9q+z3a73ql/ilaw/Rz3v0Z5U418N8h+E1WusP3McazXEOXc0PYHK8p4XdP/L9tPsH1jj2Ud2+RyapZtK9vLK7bHSqdrkJfafqpTzafNnO5v/8H2z3PT3uC65xLb6zhd8H3E5SfFqgI+3y0fDtBpJ3lTyY+hl/ucbg6Gbq9r+1FONSH+POCy7nC6uJzKTYbTk4edszKf6+qaEE1aYyi2tZFTcOw1TifGQax2imjv7uEu0rd2urmrOgktc6pmN5Uq/05DDr7b1QfGjiW2j7b92GmUtVDuLbKyDHKDOYzrbH/OLXuiPyqnJ3DHOFXh6+d2p+Dxv9g+0Onp+ba2t7G9l+1XOwVxqkytaqhTc4ndbL/d9v8O/Quor9aTrWmx/doe6zBU8wSnmiHFc/xit6xmiO09nGoVFqsGF11l+1DXaKrjdF4/xIOfV35o+2UesLO6cXBqyvo+p2uiQax2qiF2iNvdKV7r2H6o07GziWu+O53uBf562usl3b9/fdP9b7ivsv0iT2b/utBT2r+czkEHOv2vB3W+7QM8RLDG9ia23+nq2jWrnWqNTrT/DKd7wMNsXzvAundqZj7PDd3bOgWsri8s531N5D0qp+BUVU3VflY6NR2u1xTU9is9+M15ld/Z3rHh7dMI2493uqCva5EHPHjY/m8P9kS0zBWeYLte2//oZv7/dbxlUuvZVk4Xmb2eKgzqOtsvHHKZO9o+Y4B8/90TalvvdJBePMJ2OMdT6jfC9kvcv+bTIFY4BVe+Y/uNtnuNxT6nOAXhXp+td5NudbqQeJWnWMvHqcpiv5pI43LEtNa7DtsPdncA8hLXCIi6u48M2z5oHOWtI1vHfrWBelnhVIV2oItipydwP6uxHDvtOweMe1sUyrutU18Eo/iTW3Ij3HZON9BVNQ77WeEU/P0328/0gLXWxs2T27/mu/tJ8DBuccPV//uUdScP94C5aKmHfHLv9GDmP119XbTU9v+4Rr9nw3KqhVj3PPwHj9iRdq4c27m7mfS/NZFvE2z/haubwvXSCdhUNtPv+xTA6Yn/syXdk73uzr3vvFYo9e65gdLQnRvkXp3P90n6QkTcWnM7jI3th0s6TKln1+U9XvdpZn02zL06n6+X9NWIKBsKMb+sfSXtULKc5ZIeoO7tV3wtk/S5iLh39DXvz6kt9v7q/f/vvL83K/e62WudAd6XfWdJtyoN53d6RHgCq9latneStK+6t/fdhfer1P27LL4W1Rk1Ifvf7yRpfu61hVJP+7+WdI2k/4mIG+qv4cBleYikf1AaYm+50nrn/94jaT2Vb4NbJJ2c9RI/UU5NRPbRzLEy34N0KB0jO8eTzjFlhdI+8Kfs9ec2Hjsnxelp5l5K56JnS3qy0jFjEKuVhoe7RtL5khZJ+ukgx+txc6ri+Vz1Pq52Xvcqresgx9V+x1sr7Qt/jIhvT2Idm2T7BElHKJ0jdqkzJK1TDalrlM5ZH4+I1zdayBE4BVZerjTqzV1K5/tl2fvlmjnGbaQ1j3G/iYhvDricRyoN39y55unk33m/ukf++eueb0TENSOv8ICcgsivUPoNl12H3JN93+sabUOlbfeliLh+UuWerZw6ZH+u0nX9+krbrvNaN/d3HaXfzB2SlmZ/75B0ZUTcNfmSV3MKiLxM7F/5sm6hdP+zSmteW3b+3qeZ65Rer6si4vQay36UpF3UfY25jdI1z6+z16kRcWntFRysHNtKOljpXJu/ruy87lX6v2yUe3V+JyslfbGp6zOn2nn7SXqtpPdGxPebyLcpTg/AjpB0kNKoIsXrsNskXSFpsaQTIuKSfnm2qjoiAAD9OHVytpukLSVtnnttJGmJUrCs81oyqcAtxsv2wyQdK+kjo1yoO3X0eK2kz08jOAkAwGyWBc63lLSVUqDmqkk8mAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMBUxLQLAACYHts7Sdqt81HSDyLiqpp5bS5pX6Vzy6KI+FPNfOZL2l0z56hvRsTNNfLZUtILckm/i4hz6pSpkO8LJD0yl3RKRNw+ar65/J8raZum8is4KSJWjJqJ7YdI2knSDpJ2lPQwSVdK+mX2+nVErBx1Obnl7SDp6bmkSyPikhHye6Gkh+aSvhIRd9bNL8tza0l755J+FREXjJJnlu9BkjavmGSlpOskLZH0h4hYPuoyK8qyhaT9G8jq2oj4bgP5AAAAAJhtbD/T3e60/fAa+TzA9uJcPlfafkCNfLa0fVehPBsMm0+W13MK63ZqnXx65HteId8nNpFvLv+FHp+H9i9BZdnWs/0W28v7LGeZ7SNtr9vQNnlDIf93jZjfZYX8HttAGQ8o5HniqHlm+V485P/4Jtun2t6lieUXyrL7kGUps7DpsgEAZpehLxIBAHPKjyXdmPu8sbprEQzqGZLyN+Tzs7RhHShpo9zn70TEPTXyQcNs7yjpp5LeL2nDPpPPk/QhSReN44YYlTaXdJCki21/2/bO0y4QAABFjTypAADMThGxyvZpko7IJS+Q9Lkhs3pRj7RDJf1gyHwWFD5/a8j554Lb1R0c6mU9SZvmPq+QdMcAea+uUyDbGyv9L/I1ByzpcklXS7op+257SVvnptlZ0oW2HxURt9RZNtZwvqS7c5/Xk7SlpEdLenBh2n0lPc32zhFx7RjKslTS72rMV2ceAAAAAHOF7QWFatN32n7gEPOvY/uGHtWvb7C9zhD5zLN9T27++2xv2n/O0vxmZdOMAcuwR6EMXxvz8o4vLO8HvZ602w7bz7Z9bm7a/25g+TTNmLFVxbRb2/6w0z6c91MPsU9X5F9smnH6qHkCANZONM0AAJwj6a7c540l7THE/LtLekSP9EdIetYQ+ewpKX+zdH5E3DbE/BgDp85D/ymXtFjSXhFxaXHaiHBEnKf0v3yZpK9LOmYiBYUiYklEHClpV0nLcl89RdJrp1MqAADWRCACANZyEXG3pLMKycUmElUOzb3/ubqrjfdqslFmv8JnOrRrh6cVPh/Zr9+OLCBxckT8bd3RU1BfRFwp6TWF5N16TQsAwDQQiAAASGve9C+w3XeIZ6dREQ7OJX1L0rm5z4d4gJETnEbYKHaSeVq/+TARTyl8vmgqpcCwvqXUj0fHX02rIAAAFBGIAABI0pmSVuU+dzoe7GcPSfnhPk+R9I3c54dpsGYeT1bqcK/j4oj4wwDzYfzy/xdLWn9aBcHgIuJOSdfkkh7fRD8RAAA0gUAEAEBZXwznF5IHaZ6Rb3pxZURcrvQkdmXJNGWKzTLWxtEy2mpx7n0ojcSA2SEfNLpV0r3TKggAAHkM3wmgL9sbSXqQpE2y14MKf6vSNtbaHfQ8LCJ+Nu1CDGihUieDHQskfaBsYtvrqbtZxtckKSJutf09Sftk6Qfbfm1E3Fex7GLQg/4h2uOywudjbV8UEVdPpTQYiNOIM4/JJV0eES6bHmuyfZLSELRrqxVKQ7TeWfG39LuIWNUjTwCQRCACwAAiYrmk5ZKG7nQu62dgYw0euJhrQY150y7AEE6T9Inc52fa3iwibi2Z/tmSHpr7fErhfScQ8dBs2kW9MrH9SEm75JJ+I+nyIcqN8bpI6YakU63/sZJ+ZPtISV+KiBVTKxmqHFL4/JOplGJ221bSxIfnHVGv4MFQAQTNBBKoQQNgbAhEABir7Alc56Lnj6PklQU15mnwwEW/tNkW1BiriFhi+1LNPAF8gFIw4Usls+RHy7gia5bRsVDSpzVznjlUJYEIrdlJ5UKe3LZHRFyfBR0+mUveVNJnJR1n+wRJXxFP3FsjG3L1o7mkO1RRuwlTd7fqBQ56BQ+qap4BQGsQiAAwa2Q3Ocuy1w2j5ldoclI3mNF5zZXj6UJ1V0VeoB6BCNvrSzool5SvDdFpnnGOpOdlSQfZfk3JEzaG7Wy/T0l6lrqDT1LqqPRt2etK2ydK+nxE/HnM5dnV9utGmH/zxkrSItkINa+Q9C5JG+W+ekdE3DiGRW5v+/1DTH/0HKquv1wNBA6Uggcri5kDwFw3Vy6cAWBoozQ5KbK9oXoHKa4cNe8JW6h0E9Oxr+11e1wo76X0VLzjFK3pFM0EIjZV6n/iO/kJsu22Vy7pJkk/qlFujFFE2PZLJH1b0kckbdZjsu0lHSfpPba/Kun/R8TIAcMSz9PMb2tts4/tm3Of5yk1IdhO0jMkPa4w/dvV3eSqSdtJessQ079d3aPztN3RSk2SisEE+j8AgBERiACABkTE3UrVa8f9JHjcFkv6rdKNjSQ9ROnm5oLCdPmRMC4vNMvo6DTPWCf7fKgKgQilviM2zH0+nQv8dspqJJ1k+wxJfyfpcHX37dGxrqSXSlpg+40R8bnJlXKt8JkBp/uTpH+MiNPHWZi5LCKKxz0AQEMIRAAA7pc9+V4o6U255AXKBSJsP1DSgbnve9WGUETckjXP2DtLOtD2AwudG9IsY5bJOi/9pKRPZn0RHJy9nlyY9MGSPmv7xog4s+FifE/S2SPM/yZJWzZUlrY5VdLnJJ01gSr/v9VwQ+0SZAQASCIQAQBYUzEQsZ+6q1/vrXST2dEzEJH7rhOIeHD2/nTp/s5H88N2Lle6wcQsERFXSXqvpPfa3kXS/5N0mLo7gj3Z9pMi4g8NLvpHEfGhujPbPkyzNxBxglIzASmNSLOXpEfnvr9G0pkT6jj0ioh4U//JAADoRo/xAICiH0rKt0Gfbzvf7jzfYeHlEXFFRV4L1f0UNN+k40nqvoE6K2viglkoIi6JiMOVasvck/tqU0n7T6VQc9O7I+LN2esVSs1jfpP7/i2S3jqdogEAMBgCEQCALlkfDcV25S+Q7u9c8oBc+tf65HWzpHNzSQfY3iB7v6AwOc0y5oCsT4J/LiTv3GtajC4bDePFkvLNMN5j++lTKhIAAH0RiAAA9FIMCnSCBvtI2jiXXtUso9c0m2R55POUUq2JpvsRwPScISnfNIBAxBhFxMWS/jWXtI6kL9vetGQWAACmikAEAKCX7yr12dCxh+1N1N20YnFEDDI86TfV3TzjUNsPl7RrLu2CrBNEzAERcZOk3+eS7ppWWdYi/yFpUe7zYySdkPXFAgBAqxCIAACsIeurIT8qwXqS9pC0by6tsllGLq+bJZ2XS3q+pD0l5W+QaJYxh2RNeLbKJV02rbKsLSJitaSXS7oxl3ywpFdPp0QAAJQjEAEAKFMMDrxKg4+WUZSf9kGSXln4fpghADFBtufZfsiQs+2q1Dyg4xcNFgklIuJPSsGIvI/a3mka5QEAoAyBCABAmTPV3aQi36fDL7OhGwdVbJ6xZ+79zyLi90Lr2N5Y0s8lXWf7iEGq+WedkX4yl7Ra0v+OqYgoiIizJH04l/RASV+xPW9KRQIAYA0EIgAAPUXELeq+gcyfM4apDdHpM+D8kq+pDdFeb5f0OEnzJJ0gaaHt7comtv0Ypd/GDrnkD/cZ4hXNO1rSJbnP20v62JTKAgDAGtaddgEAAK22UNLf9EgfKhCRm2fPHumzvX+If7d9xxDTXxERx42tNM1aqTT6RacmxP6SFtg+T6ljxD9IukfS4yX9paRDJW2Qm//Xkt4xsdJCkhQR99p+iaSfKQWRJOmVts+JiC83uKj5tt9XY74rI+KkBssBAAAAYK6wvY3XVKu9v+2H215VyOt34+rV3/ZzCss6taF8z+uxTYZxXv+l9C3DHoU8B+o4tOay/sb2khrrebXtJzdUhjcU8n7XiPldVsjvsQ2U8YBCnieOmmeW78WFfLfqP9f9876sMO9S248boSy71/gd9HJa3TIAAOYGmmYAAEpFxLVKfQTk1brpjYgbtWbzjIUR4Tr5YTIi4nxJO0n64oCzrJT0HklPioifjatc6C+rdfCFXNImSv1FrD+lInWwzwPAWo6mGQCAfj4m6YDc56+MkNcnJC3NfR705raOG5U6yez4cUP5XiDpthHm/2UDZbhJ3et2UQN5loqI2yX9ve13Kv0W9pH0aEmPyCZZnHt9NyKubrgI16hmb1BsAAAARElEQVR7fUftc+IcSb/Jfb5rxPwk6Y/qLuPFDeQppaFvl+Q+3z3k/EcoreuOmmlis7ekM2qU5WZ1r2NdY/29AgDa7/8A+CWumvENjAwAAAAASUVORK5CYII=" />
                            </defs>
                        </svg>

                        <h1 class="heading heading__xs heading__light mt0 mb0 slow-fade active">
                            <?php the_field('main_description');?>
                        </h1>
                        <h2 class="slow-fade active">
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container cols-24">
        <div class="col socials">
            <?php if(get_field('social_media_link')): ?>

            <?php while(has_sub_field('social_media_link')): ?>

            <a href="<?php the_sub_field('social_link'); ?>" target="_blank"><img
                    src="<?php the_sub_field('social_logo'); ?>"></a>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="col comingsoon main-box">
            <div>
                <p><?php the_field('contact_us');?> <a
                        href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
            </div>
        </div>
        <div class="col comingsoon short-box">
            <div>
                <p>NEW<br>WEBSITE<br>COMING<br>SOON</p>
            </div>
        </div>
    </div>
</div>